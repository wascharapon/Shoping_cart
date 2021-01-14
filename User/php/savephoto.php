<?php
include'../../Admin/php/connect.php';
      $user_name=gethostbyaddr($_SERVER['REMOTE_ADDR']);
	  $sql ="SELECT *
	  FROM real_user
	  LEFT JOIN product
	  ON real_user.buy_item = product.id where real_user.user_name = '$user_name'";
	  $rs = @mysqli_query($con, $sql);
	  $total=0;
			while ($row = mysqli_fetch_array($rs))
			  {	 
			  $total += $row['price']*$row['token'];
			}
$name = $_GET['user_name'];
$social = $_GET['social'];
$phone = $_GET['phone'];
$address = $_GET['address'];
$user_name=gethostbyaddr($_SERVER['REMOTE_ADDR']);
$time= time();
$this_time= date("Y-m-d",$time);
$im = imagegrabscreen();
imagepng($im,"../photo/bill/".$time.".png");
$img =$time.".png";
$sql_a ="INSERT INTO orders (name,address,total,social,img,this_time,status) 
VALUES ('$name','$address','$total','$social','$img','$this_time','No');";
$sql_b ="DELETE FROM real_user WHERE user_name='$user_name'";
	if(mysqli_query($con,$sql_a)&&mysqli_query($con,$sql_b)) {
echo "<script>alert('สั่งซื้อสินค้าเรียบร้อย');window.location.href = '../index.php#container';</script>";
	}
	else
	{
		echo "เกิดข้อผิดพลาดในการเพิ่มข้อมูล".mysqli_errno($con);
	}


        
?>
