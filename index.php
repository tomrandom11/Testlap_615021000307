<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ระบบจัดการนักศึกษา</title>
</head>
<body>
    <?php 
        require_once("db_con.php"); //การเรียกใช้ไฟล์
        session_start();
    if(isset($_POST['login'])) {
        $sql = "SELECT * FROM movie WHERE m_user = '{$_POST['m_user']}' AND m_pin = '{$_POST['m_pin']}'";
        $result = $conn->query($sql);
        if($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $_SESSION["m_user"] = $row['m_user'];
        } else {
            echo "<p>ชื่อและpinไม่มีในระบบกรุณากรอกใหม่</p>";
        }
    }
 
    if(isset($_POST['logout'])) {
        session_unset();
    }
 
    if(isset($_SESSION['m_user'])) {
        require_once("table5.php");
    } else {
        require_once("login.php");
    }

     ?>
</body>
</html>
