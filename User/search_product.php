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
          <li><a href="#" class="active"><span>ค้นหาคำว่า <?php echo $_POST['search_text'] ?></span></a></li>
          <li><a href="#" class="red"><span>สินค้าทั้งหมด</span></a></li>
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
                $sql ="SELECT * FROM product where name LIKE ('%$_POST[search_text]%')";
                $rs = @mysqli_query($con,$sql);
			          while ($row = mysqli_fetch_array($rs))
	                    {	 ?>
                  <li style="height:400;width:273px">
                  <div class="image"> <a href="#"><img src="photo/product/<?php echo $row['img'];?>" alt="" height="150px" /></a> </div><br>
                  <p>รหัสสินค้า: <span><?php echo $row['id'];?></span><br />
                  ชื่อสินค้า: <span><?php echo $row['name'];?></span><br />
                     หมวดหมู่ : <span><?php echo $row['category'];?></span><br />
                     ราคา : <a href="#"><?php echo $row['price'];?></a> </p>
                  <p class="price">รายละเอียดสินค้า <br><strong><?php echo $row['detail'];?></strong> </p><br>
                  <center>
           <a onclick="Add_item(<?php echo $row['id'];?>)"><img src="photo/icon_buy.png" height="80px"width="80px"/> </a>
           <a onclick="info_product(<?php echo $row['id'];?>)" style="margin-left:30px"><img src="photo/information.png" alt="" height="80px"width="80px"/> </a>
                 </center>
              
                </li> 
                <?php } ?> 

              </ul>
              <div class="cl">&nbsp;</div>
            </div>
          </div>
          
          <!-- End First Tab Content -->
         
          <!-- Third Tab Content -->
          <div class="tab-content">
            <div class="items">
              <div class="cl">&nbsp;</div>
              <ul>
                <?php $sql ="SELECT * FROM product";
        $rs = @mysqli_query($con, $sql);
			while ($row = mysqli_fetch_array($rs))
	         {	 ?>
              <li style="height:400;width:273px">
                  <div class="image"> <a href="#"><img src="photo/product/<?php echo $row['img'];?>" alt="" height="150px" /></a> </div><br>
                  <p>รหัสสินค้า: <span><?php echo $row['id'];?></span><br />
                  ชื่อสินค้า: <span><?php echo $row['name'];?></span><br />
                     หมวดหมู่ : <span><?php echo $row['category'];?></span><br />
                     ราคา : <a href="#"><?php echo $row['price'];?></a> </p>
                  <p class="price">รายละเอียดสินค้า <br><strong><?php echo $row['detail'];?></strong> </p><br>
                  <center>
           <a onclick="Add_item(<?php echo $row['id'];?>)"><img src="photo/icon_buy.png" height="80px"width="80px"/> </a>
           <a onclick="info_product(<?php echo $row['id'];?>)" style="margin-left:30px"><img src="photo/information.png" alt="" height="80px"width="80px"/> </a>
                 </center>
                </li>
          <?php } ?> 

              </ul>
              <div class="cl">&nbsp;</div>
            </div>
          </div>
          <!-- End Third Tab Content -->
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