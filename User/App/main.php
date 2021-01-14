 <!-- Search, etc -->
 <div class="options">
      <div class="search">
        <form action="search_product.php" method="post">
          <span class="field">
          <input type="text" name="search_text"class="blink" value="SEARCH" title="SEARCH" />
          </span>
          <input type="submit" class="search-submit" value="GO" />
        </form>
      </div>
      <span class="left" style="font-size:15px;">ผู้ใช้งาน  <?php echo gethostbyaddr($_SERVER['REMOTE_ADDR']);?></span>
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
      <div class="right"> <span class="cart"> <a href="confirm-order.php#container" class="cart-ico">&nbsp;</a><strong>$<?php echo $total;?></strong> </span>
       <span class="left more-links"> <a href="confirm-order.php#container">ชำระเงิน</a> <a href="product-list.php#container">รายการที่จอง</a> </span> 
     </div>
    </div>
    <!-- End Search, etc -->