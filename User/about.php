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
                $sql ="SELECT * FROM about ";
                $rs = @mysqli_query($con, $sql);
			        if ($row = mysqli_fetch_array($rs))
	         {	 ?>
              <li style="width:100%">
                  <div class="image"> </div>
                  <center style="font-size:25px">
              
        
                  <p><h2>เกี่ยวกับเรา</h2><br><br><br><br><span><?php echo $row['text_story'];?></span><br /><br><br>
           
                 </center>
                  <center>
           <a href="index.php"><img src="photo/back.png"  height="80px"width="80px"/> </a>
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