<?php
//เซื่อมต่อฐานข้อมูล
require('dbconnect.php');
//รับค่าข้อมูล
$Last_Name=$_POST["Last_Name"];
$First_Name=$_POST["First_Name"];
$Middle_Name=$_POST["Middle_Name"];
$suffix=$_POST["suffix"];

//บันทึกข้อมูล
$sql="INSERT INTO mysqli_connect(Last_Name,First_Name,Middle_Name,suffix) VALUE('$Last_Name','$First_Name','$Middle_Name','$suffix')";
//รับคำสั่ง
$result= mysqli_query($con,$sql);

if($result){
    header("location:dbindex.html");
    exit(0);
}else{
    echo mysqli_error($con);
}