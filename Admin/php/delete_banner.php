<?php 
include'connect.php';
$id= $_GET['id'];

	$sql="DELETE FROM banner  WHERE id = '$id'";	
	 if(mysqli_query($con,$sql))
		 {
			 echo "<script>alert('ลบข้อมูลเรียบร้อย');window.location.href = '../banner_show.php?page=r_banner';</script>";
		 }
	
?>