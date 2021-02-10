<h1>  <a href="table5.php">Home</a> </h1>
<?php 
    require_once("db_con.php");
    $sql = "UPDATE movie SET
    m_name = '{$_POST['m_name']}',
    m_day = '{$_POST['m_day']}',
    m_user = '{$_POST['m_user']}',
    m_pin = '{$_POST['m_pin']}'
    WHERE m_id = '{$_POST['m_id']}' ";
            
    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
?>
