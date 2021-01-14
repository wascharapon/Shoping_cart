<?php 
include'../../Admin/php/connect.php';
$id= $_GET['id_item'];

	$sql="DELETE FROM real_user  WHERE id_real = '$id'";	
	 if(mysqli_query($con,$sql))
		 {
			 echo "<script>alert('ลบข้อมูลสินค้าเรียบร้อย');window.location.href = '../product-list.php#container';</script>";
		 }
	
?>