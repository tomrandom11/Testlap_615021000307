<h3>เพิ่มภาพยนต์ <small><a href=".">ย้อนกลับ</a></small></h3>
<!-- การระบุเพื่อไปใช้ -->
<form action="insert.php" method="post">
    <label for="m_id">รหัสภาพยนต์</label>
    <input type="text" name="m_id" id="m_id">
    <br><br>
    <label for="m_name">ชื่อภาพยนต์</label>
    <input type="text" name="m_name" id="m_name">
    <br><br>
    <label for="m_day">วัน-เวลาฉาย</label>
    <input type="datetime" name="m_day" id="m_day">
    <br><br>
    <label for="m_user">ชื่อลูกค้า</label>
    <input type="text" name="m_user" id="m_user">
    <br><br>
    <label for="m_pin">PIN</label>
    <input type="text" name="m_pin" id="m_pin">
 
    <!-- ปุ่ม -->
    <br><br>
    <button type="submit">ยืนยัน</button>
    <button type="reset">ล้างข้อมูล</button>
</form>
