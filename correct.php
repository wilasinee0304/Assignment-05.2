<meta charset="UTF-8">
<?php
//1. เชื่อมต่อ database: 
include('dbconnect.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
 
//2. query ข้อมูลจากตาราง tb_member: 
$query = "SELECT * FROM mysqli_connect ORDER BY Last_Name asc" or die("Error:" . mysqli_error()); 
//3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result . 
$result = mysqli_query($con, $query); 
//4 . แสดงข้อมูลที่ query ออกมา โดยใช้ตารางในการจัดข้อมูล: 
 
echo "<table border='1' align='center' width='500'>";
//หัวข้อตาราง
echo "<tr align='center' bgcolor='#CCCCCC'><td>Last Name</td><td>First Name</td><td>Middle Name</td><td>suffix(Jr.Sr, ฯลฯ )</td><td>correct</td></tr>";
while($row = mysqli_fetch_array($result)) { 
  echo "<tr>";
  echo "<td>" .$row["Last_Name"] .  "</td> "; 
  echo "<td>" .$row["First_Name"] .  "</td> ";  
  echo "<td>" .$row["Middle_Name"] .  "</td> ";
  echo "<td>" .$row["suffix"] .  "</td> ";
  
  //แก้ไขข้อมูล
  echo "<td><a href='correct.php?ID=$row[0]'>edit</a></td> ";
  
}
echo "</table>";
//5. close connection
mysqli_close($con);
?><body>
<li><a href="index.html" target="_self"> ย้อนกลับ </a></li>
</body>