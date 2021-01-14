<?php 
include('connect.php');
$name = $_POST['name'];
$price = $_POST['price'];
$category = $_POST['category'];
$detail = $_POST['detail'];
$full_detail = $_POST['full_detail'];
$id = $_POST['id'];
//upload image
$Logo = pathinfo(basename($_FILES['Logo']['name']),PATHINFO_EXTENSION);
if(pathinfo(basename($_FILES['Logo']['name']),PATHINFO_EXTENSION)!='')
{
	$new_image_name =time().".".$Logo;
	$image_path ="../../User/photo/product/";
	$upload_path = $image_path.$new_image_name;
	 $succes=move_uploaded_file($_FILES['Logo']['tmp_name'],$upload_path);
 	if($succes == false)
	 {
	 echo "ไม่สามารถ upload รูปภาพได้ ";
	 exit();
	 }
	 else
	 {
		 echo mysqli_errno($con);
	 }
	$sql ="UPDATE product
SET img ='$new_image_name',name = '$name',price= '$price',category='$category',detail= '$detail',full_detail='$full_detail'
WHERE id = '$id'";
}
else 
{
	$sql ="UPDATE product
SET name = '$name',price= '$price',category='$category',detail= '$detail',full_detail='$full_detail'
WHERE id = '$id'";
}

if($rs = @mysqli_query($con, $sql))
{
	echo "<script>alert('เพิ่มข้อมูลเรียบร้อย');window.location.href = '../product_show.php?page=r_product';</script>";
}
else
{
	echo "<script>alert('แก้ไขข้อมูลไม่สำเร็จ');window.location.href = '../product_show.php?page=r_product;</script>".mysqli_errno($con);
}
?>
