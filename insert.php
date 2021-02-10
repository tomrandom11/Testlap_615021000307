<a href="table5.php">Home</a>
<?php 
    require_once("db_con.php");
    $sql = "INSERT INTO movie (m_id,m_name,m_day,m_user,m_pin) 
    VALUES ('{$_POST['m_id']}', '{$_POST['m_name']}','{$_POST['m_day']}', '{$_POST['m_user']}','{$_POST['m_pin']}')";
    
    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
 ?>
