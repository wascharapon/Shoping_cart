<?php
include'php/connect.php';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
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

function confirm_bill(){
  window.location = "php/savephoto.php?user_name=<?php echo $_GET['user_name'];?>&&social=<?php echo $_GET['social'];?>&&phone=<?php echo $_GET['phone'];?>&&address=<?php echo $_GET['address'];?>#container";
                  } 
</script>

</head>
<body >
<!-- Top -->
<div id="toper" >
  <div class="shell">
<!-- Main -->
<div id="main">
  <div class="shell">
  
  <?php 
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
                      }?>
                      
    <!-- Content -->
    <div id="content">
      <!-- Tabs -->
     
      <!-- Tabs -->
      <!-- Container -->
      <div class="container" id='container'>
        <div class="tabbed">
          <!-- First Tab Content -->
          <div class="tab-content" style="display:block;">
            <div class="items">
              <div class="cl">&nbsp;</div>
              <ul>
              <li style="width:95%">
                  <div class="image"> </div>
                  <center style="font-size:25px">
                  <br>
                  <p id="p_h">กรุณาตรวจสอบข้อมูลให้ถูกต้องก่อนทำรายการต่อไป</p><br><br>
                  <p style=>รหัสผู้ใช้งาน:<span><?php echo gethostbyaddr($_SERVER['REMOTE_ADDR']); ?></span><br /><br>
         
                  <p class="price">รายละเอียดสินค้า <br><br><br><br><strong><table id="customers">
  <tr>
    <th><center>รหัสสินค้า</center></th>
    <th><center>ชื่อสินค้า</center></th>
    <th><center>จำนวน</center></th>
    <th><center>ราคา</center></th>
  </tr>
  <?php 
  $sql ="SELECT *
                FROM real_user
                LEFT JOIN product
                ON real_user.buy_item = product.id where real_user.user_name = '$user_name'";
                $rs = @mysqli_query($con, $sql);
			          while ($row = mysqli_fetch_array($rs))
	                    {	 ?>
  <tr>
    <td><center><?php echo $row['id'];?></center></td>
    <td><center><?php echo $row['name'];?></center></td>
    <td><center><?php echo $row['token'];?></center></td>
    <td><center><?php echo $row['price'];?></center></td>
  </tr>
                      <?php } ?>
 
 
</table></strong> </p><br><br><br><br>
                  รวมเป็นเงินราคา : <span> <?php echo $total;?> บาท</span> </p><br><br>
                 </center>
                 <center>
                 <a onclick="confirm_bill()"><img src="photo/icon_send.png" height="80px"width="80px"/> </a>
                  <a href="confirm-order.php#container"style="margin-left:30px"><img src="photo/back.png"  height="80px"width="80px"/> </a>
                 </center>
                </li>
              </ul>
              <div class="cl">&nbsp;</div>
            </div>
          </div>
          <!-- End First Tab Content -->
        
  <!-- Script -->
   <!-- Script -->
 
        </div>
        <!-- Brands 
        <div class="brands">
          <h3>Brands</h3>
          <div class="logos"> <a href="#"><img src="css/images/logo1.gif" alt="" /></a> <a href="#"><img src="css/images/logo2.gif" alt="" /></a> <a href="#"><img src="css/images/logo3.gif" alt="" /></a> <a href="#"><img src="css/images/logo4.gif" alt="" /></a> <a href="#"><img src="css/images/logo5.gif" alt="" /></a> </div>
        </div>
         End Brands -->
       
      </div>
      <!-- End Container -->
    </div>
    <!-- End Content -->
  </div>
</div>
<!-- End Main -->
</body>
</html>

