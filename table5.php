<?php 
  require_once("db_con.php");//เรียกใช้กconn
  $sql = "SELECT * FROM movie"; //สร้างเก้บ
  $result = $conn->query($sql);//ดึงข้อมูล
  if(isset ($_GET['serach_click'])){
    $sql = "SELECT * FROM movie WHERE m_name LIKE '%{$_GET['search']}%'";// 
  
    echo "<p>คุณกำลังค้นหา: {$_GET['search']}</p>";
  }
  $result = $conn->query($sql);//ดึงข้อมูล

 ?>
 <form action="." method="get">
    <label for="search">ค้นหาภาพยนต์</label>
    <input type="text" name="search" id="search" placeholder="กรอกชื่อภาพยนต์">
    <button type="submit" name="serach_click">ค้นหา</button>
</form>
<a href="form_insert.php">เพิ่มนักศึกษา</a>
<table style="width:100%"border="1">
  <tr>
    <th>รหัสภาพยนต์</th>
    <th>ชื่อภาพยนต์</th>
    <th>เวลาที่เริ่มฉาย (วัน+เวลา)</th>
    <th>ชื่อผู้ใช้งาน (ลูกค้า)</th>
    <th>PIN </th>
  </tr>
  <?php 
    if ($result->num_rows > 0) {//มีข้อมูลรึเปล่า
    while($row = $result->fetch_assoc()) {
      ?>
<tr>
    <td><?php echo $row['m_id'];?></td>
    <td><?php echo $row['m_name'];?></td>
    <td><?php echo $row['m_day'];?></td>
    <td><?php echo $row['m_user'];?></td>
    <td><?php echo $row['m_pin'];?></td>
  </tr>
  <?php
    }
    } else {
      echo "0 results";
    }
    $conn->close();   
 ?>
</table>
