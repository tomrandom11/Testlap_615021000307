<?php 
    require_once("db_con.php");//เรียกใช้กconn
    $sql = "SELECT * FROM movie WHERE m_id ='{$_GET['id']}'"; //สร้างเก้บ
    $result = $conn->query($sql);//ดึงข้อมูล
    if ($result->num_rows > 0) {//มีข้อมูลรึเปล่า
       $row = $result->fetch_assoc();//เอาแค่ข้อมูล
    }
 ?>
<h3>แก้ไข <small><a href=".">ย้อนกลับ</a></small></h3>
 
<!-- การระบุเพื่อไปใช้ -->
<form action="update.php" method="post">
<label for="m_id">รหัสภาพยนต์</label>
    <?php echo $row['m_id']; ?>
    <input type="hidden" name="m_id" id="m_id" value="<?php echo $row['m_id'] ?>">
 
    <br><br>
    <label for="m_name">ชื่อภาพยนต์</label>
    <input type="text" name="m_name" id="m_name" value="<?php echo $row['m_name'] ?>">
    <br><br>
    <label for="m_day">วัน-เวลา</label>
    <input type="datetime" name="m_day" id="m_day" value="<?php echo $row['m_day'] ?>">
    <br><br>
    <label for="m_user">ชื่อลูกค้า</label>
    <input type="text" name="m_user" id="m_user" value="<?php echo $row['m_user'] ?>">
    <br><br>
    <label for="m_pin">PIN</label>
    <input type="text" name="m_pin" id="m_pin" value="<?php echo $row['m_pin'] ?>">
 
    <!-- ปุ่ม -->
    <br><br>
    <button type="submit">ยืนยัน</button>
    <button type="reset">ล้างข้อมูล</button>
</form>
