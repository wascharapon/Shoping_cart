<?php 
include('connect.php');
$story_text = $_POST['story_text'];
	$sql ="UPDATE about
SET text_story = '$story_text'
WHERE id = 1";

if($rs = @mysqli_query($con, $sql))
{
	echo "<script>alert('เพิ่มข้อมูลเรียบร้อย');window.location.href = '../about.php?page=w_about';</script>";
}
else
{
	echo "<script>alert('แก้ไขข้อมูลไม่สำเร็จ');window.location.href = '../about.php?page=w_about';</script>".mysqli_errno($con);
}
?>
