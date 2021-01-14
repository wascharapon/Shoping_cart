<?php 
include'../../Admin/php/connect.php';
$user_name = $_GET['user_name'];
$buy_item = $_GET['id'];
$token = $_GET['token'];
$time=date("Y-m-d",time());
$sql ="INSERT INTO real_user (user_name,buy_item,token,time) VALUES ('$user_name','$buy_item','$token','$time');";

$query = mysqli_query($con,$sql);
	if($query) {
echo "<script>alert('เพื่มข้อมูลสินค้าเรียบร้อย');window.location.href = '../index.php#container';</script>";
	}
	else
	{
		echo "เกิดข้อผิดพลาดในการเพิ่มข้อมูล".mysqli_errno($con);
	}


?>