<?php 
include('connect.php');
$name = $_POST['name'];
$price = $_POST['price'];
$category = $_POST['category'];
$detail = $_POST['detail'];
$full_detail = $_POST['full_detail'];
//upload image
$Logo = pathinfo(basename($_FILES['Logo']['name']),PATHINFO_EXTENSION);
$new_image_name =time().".".$Logo;
$image_path ="../../User/photo/product/";
$upload_path = $image_path.$new_image_name;
$succes=move_uploaded_file($_FILES['Logo']['tmp_name'],$upload_path);
 if($succes == false)
 {
	 echo "ไม่สามารถ upload รูปภาพได้ ";
	 exit();
 }
$sql ="INSERT INTO product (name,price,detail,full_detail,img,category) 
VALUES ('$name','$price','$detail','$full_detail','$new_image_name','$category');";

$query = mysqli_query($con,$sql);
	if($query) {
echo "<script>alert('เพื่มข้อมูลเรียบร้อย');window.location.href = '../product.php?page=w_product';</script>";
	}
	else
	{
		echo "เกิดข้อผิดพลาดในการเพิ่มข้อมูล".mysqli_errno($con);
	}


?>