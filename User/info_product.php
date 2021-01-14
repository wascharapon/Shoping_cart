<?php include'App/header.php'; ?>
<!-- Main -->
<div id="main">
  <div class="shell">
  <?php include'App/main.php'; ?>
    <!-- Content -->
    <div id="content">
      <!-- Tabs -->
      <div class="tabs">
        <ul>
          <li><a href="#" class="active"><span>ชื่อสินค้า</span></a></li>

        </ul>
      </div>
      <!-- Tabs -->
      <!-- Container -->
      <div id="container">
        <div class="tabbed">
          <!-- First Tab Content -->
          <div class="tab-content" style="display:block;">
            <div class="items">
              <div class="cl">&nbsp;</div>
              <ul>
                <?php 
                $sql ="SELECT * FROM product where id = $_GET[id_item]";
                $rs = @mysqli_query($con, $sql);
			        if ($row = mysqli_fetch_array($rs))
	         {	 ?>
              <li style="width:95%">
                  <div class="image"> </div>
                  <center style="font-size:25px">
                  <br>
                  <span ><img  id="finger" src="photo/product/<?php echo $row['img'];?>" alt="" height="478px" /></span><br /><br><br /><br>
                  <p style=>รหัสสินค้า:<span><?php echo $row['id'];?></span><br /><br><br>
                  <p style=>ชื่อสินค้า:<span><?php echo $row['name'];?></span><br />
                
                 <br /><br>
            
                  <p class="price">รายละเอียดสินค้า <br><br><strong><?php echo $row['full_detail'];?></strong> </p><br><br><br>
                  ราคา : <span><?php echo $row['price'];?></span> </p><br><br><br>
                 </center>
                  <center>
           <a onclick="Add_item(<?php echo $row['id'];?>)"><img src="photo/icon_buy.png" height="80px"width="80px"/> </a>
           <a href="index.php"style="margin-left:30px"><img src="photo/back.png"  height="80px"width="80px"/> </a>
                 </center>
                </li>
           <?php } ?>
              </ul>
              <div class="cl">&nbsp;</div>
            </div>
          </div>
          <!-- End First Tab Content -->
     
        </div>
        <!-- Brands 
        <div class="brands">
          <h3>Brands</h3>
          <div class="logos"> <a href="#"><img src="css/images/logo1.gif" alt="" /></a> <a href="#"><img src="css/images/logo2.gif" alt="" /></a> <a href="#"><img src="css/images/logo3.gif" alt="" /></a> <a href="#"><img src="css/images/logo4.gif" alt="" /></a> <a href="#"><img src="css/images/logo5.gif" alt="" /></a> </div>
        </div>
         End Brands -->
       <?php include'App/footer.php'; ?>
      </div>
      <!-- End Container -->
    </div>
    <!-- End Content -->
  </div>
</div>
<!-- End Main -->
</body>
</html>
<?php include'App/footer.php'; ?>