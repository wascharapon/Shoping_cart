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
          <li><a href="#" class="active"><span>ชำระเงิน</span></a></li>

        </ul>
      </div>
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
                  <p id="p_h">กรุณากรอกข้อมูลให้ครบถ้วนเพื่อเป็นหลักฐานในการซื้อขาย</p><br><br>
                  <p style=>รหัสผู้ใช้งาน:<span><?php echo gethostbyaddr($_SERVER['REMOTE_ADDR']); ?></span><br /><br>
                     ชื่อผู้สั่งซื้อสินค้า : <input id="user_name" type="text" name="user_name" value="" required><br /><br>
                     Facebook,Line : <input id="social"  type="text" name="social" value="" required><br /><br>
                     เบอร์โทรศัพท์ : <input  id="phone"  type="text" name="phone" value=""  required><br /><br><br><br>
                     ที่อยู่ปัจจุบัน<br><br> <textarea name="address" id="address" required></textarea> <br /><br><br>
              
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
           <a onclick="confirm_item(<?php echo $total;?>)"><img src="photo/confirm-item.png" height="80px"width="80px"/> </a>
           <a href="index.php"style="margin-left:30px"><img src="photo/back.png"  height="80px"width="80px"/> </a>
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