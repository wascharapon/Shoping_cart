<?php 
include'connect.php';
$id= $_GET['id'];

	$sql="DELETE FROM product  WHERE id = '$id'";	
	 if(mysqli_query($con,$sql))
		 {
			 echo "<script>alert('ลบข้อมูลเรียบร้อย');window.location.href = '../product_show.php?page=r_product';</script>";
		 }
	
?>