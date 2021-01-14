<?php 
include'connect.php';
	$sql="DELETE FROM orders  WHERE status = 'Yes'";	
	 if(mysqli_query($con,$sql))
		 {
			 echo "<script>alert('ลบข้อมูลเรียบร้อย');window.location.href = '../orders_show.php?page=r_orders';</script>";
		 }
	
?>