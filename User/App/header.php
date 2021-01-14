<?php
include'php/connect.php';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href='photo/favicon.ico' rel='icon' type='image/x-icon'/>
<title>Cosmentic</title>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/table.css" type="text/css" media="all" />
<!--[if lte IE 6]><style type="text/css" media="screen">.tabbed { height:420px; }</style><![endif]-->
<script src="js/jquery-1.4.1.min.js" type="text/javascript"></script>
<script src="js/jquery.jcarousel.pack.js" type="text/javascript"></script>
<script src="js/jquery.slide.js" type="text/javascript"></script>
<script src="js/jquery-func.js" type="text/javascript"></script>
<script src="alert/dist/sweetalert-dev.js"></script>
<link rel="stylesheet" href="alert/dist/sweetalert.css">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<script type="text/javascript">

function alert_p()
{
  var person = prompt("กรุณาใส่จำนวนสินค้า","1");
     if (person == null || person == "") {
      window. location = 'index.php#container';
      } else {
        txt =person;
      }
      return txt;
      
}
function Add_item(id){
  swal("กรุณาระบุจำนวนสินค้า:", {
  content: "input",
})
.then((value) => {
  if(value!=0)
  {
  swal(`ซื้อสินค้าทั้งหมด:${value}ชิ้น`);
  window. location = 'php/add_item.php?id='+id+'&&token='+value+'&&user_name=<?php echo gethostbyaddr($_SERVER['REMOTE_ADDR']);?>';
  }
  else (value==0)
  {
    swal({
    title: "ข้อความแจ้งเตือน",
    text: "ท่านไม่ได้ระบุจำนวนสินค้า",
    icon: "warning",
    button:"กรุณาคลิกซื้อสิ้นค้าใหม่อีกครั้ง"
     }).then(function() {
      window. location = 'index.php#container';
    });
  }
});

   
}
 
function Delete_item(id){
  window.location = "php/delete_item.php?id_item="+id;
     }
  function info_product(id){
    window.location = "info_product.php?id_item="+id+"#container";
  } 
 
  function confirm_item(total){
    if(total>0)
    {
    var user_name=document.getElementById("user_name").value;  
    var social=document.getElementById("social").value;  
    var phone=document.getElementById("phone").value;  
    var address=document.getElementById("address").value;
    if(user_name==''||social==''||phone==''||address=='')
    {
      swal("กรุณากรอกข้อมูลให้ถูกต้อง","ชื่อผู้สั่งซื้อสินค้า,Facebook,เบอร์โทรศัพท์,ที่อยู่ปัจจุบัน", "warning", {
      button: "กรอกข้อมูล",});
    }
    else
    {
      window.location = "screenshot.php?user_name="+user_name+"&&social="+social+"&&phone="+phone+"&&address="+address+"#container"; 
    }
  }
  else if(total == 0)
   {  
    swal({
    title: "ข้อความแจ้งเตือน",
    text: "ท่านยังไม่ได้ทำการเลือกซื้อสินค้า",
    icon: "warning",
    button:"เลือกซื้อสินค้า"
     }).then(function() {
      window. location = 'index.php#container';
    });
   }
  
  }
</script>

</head>
<body>
<!-- Top -->
<div id="top">
  <div class="shell">
    <!-- Header -->
    <div id="header">
      <h1 id="logo"><a href="#"></a></h1>
      <div id="navigation">
        <ul>
          <li><a href="index.php">หน้าแรก</a></li>
          <li><a href="about.php">เกี่ยวกับเรา</a></li>
          <li><a href="../admin/login/index.php">เข้าสู่ระบบ</a></li>
        </ul>
      </div>
    </div>
    <!-- End Header -->
    <!-- Slider -->
    <br>
    <div id="slider">
      <div id="slider-holder">
        <ul>
          <?php   
        $sql ="SELECT * FROM banner";
        $rs = @mysqli_query($con, $sql);
			while ($row = mysqli_fetch_array($rs))
	    {	 ?>
          <li><center><a href="#"><img src="photo/banner/<?php echo $row['img'];?>" width="980px" height="390px"  alt="" /></a></center></li>
  <?php } ?>
        </ul>
      </div>
      <div id="slider-nav"> <a href="#" class="prev">Previous</a> <a href="#" class="next">Next</a> </div>
    </div>
    <!-- End Slider -->
  </div>
</div>
<!-- Top -->