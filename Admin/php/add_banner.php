<?php 
include('connect.php');
//upload image
$Logo = pathinfo(basename($_FILES['Logo']['name']),PATHINFO_EXTENSION);
$new_image_name =time().".".$Logo;
$image_path ="../../User/photo/banner/";
$upload_path = $image_path.$new_image_name;
$succes=move_uploaded_file($_FILES['Logo']['tmp_name'],$upload_path);
 if($succes == false)
 {
	 echo "ไม่สามารถ upload รูปภาพได้ ";
	 exit();
 }
$time=date("Y-m-d",time());
$sql ="INSERT INTO banner (img,this_time) VALUES ('$new_image_name','$time');";

$query = mysqli_query($con,$sql);
	if($query) {
echo "<script>alert('เพื่มข้อมูลเรียบร้อย');window.location.href = '../banner.php?page=w_banner';</script>";
	}
	else
	{
		echo "เกิดข้อผิดพลาดในการเพิ่มข้อมูล".mysqli_errno($con);
	}


?>