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
          <?php 
        $sql ="SELECT *
                FROM real_user
                LEFT JOIN product
                ON real_user.buy_item = product.id";
                $rs = @mysqli_query($con, $sql);
			          $row = mysqli_num_rows($rs);
                 ?>
               
          <li><a href="#" class="active"><span>รายการที่ต้องชำระทั้งหมด <?php echo $row ?> รายการ</span></a></li>
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
              $user_name=gethostbyaddr($_SERVER['REMOTE_ADDR']);
                $sql ="SELECT *
                FROM real_user
                LEFT JOIN product
                ON real_user.buy_item = product.id where real_user.user_name = '$user_name'";
                $rs = @mysqli_query($con, $sql);
			          while ($row = mysqli_fetch_array($rs))
	                    {	 ?>
                   <li style="height:500;width:273px">
                  <div class="image"> <a href="#"><img src="photo/product/<?php echo $row['img'];?>" alt="" height="150px" /></a> </div><br>
                  <p>รหัสสินค้า: <span><?php echo $row['id'];?></span><br />
                  ชื่อสินค้า: <span><?php echo $row['name'];?></span><br />   
                     หมวดหมู่ : <span><?php echo $row['category'];?></span><br />
                     จำนวน : <span><?php echo $row['token'];?></span><br />
                     ราคา : <a href="#"><?php echo $row['price'];?></a> </p>
                     รวมราคา : <a href="#"><?php echo $row['price']*$row['token'];?></a> </p>
                  <p class="price">รายละเอียดสินค้า <br><strong><?php echo $row['detail'];?></strong> </p><br>
                  <center>
           <a onclick="info_product(<?php echo $row['id'];?>)"><img src="photo/information.png" height="80px"width="80px"/> </a>
           <a onclick="Delete_item(<?php echo $row['id_real'];?>)" style="margin-left:30px"><img src="photo/delete-icon.png" alt="" height="80px"width="80px"/> </a>
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