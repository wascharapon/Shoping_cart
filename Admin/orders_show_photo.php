<?php include'App/header.php';
    include'App/menu.php'; 
    ?>




    <main class="app-content">
      <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
      <div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i>แสดงข้อมูล</h1>
          <p></p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        </ul>
         </div>
        <div class="row" >
        <div class="col-md-12">
          <div class="tile"> 
            <div class="tile-body" style="font-size:18px">
               	<?php
        $sql ="SELECT * FROM orders where id = '$_GET[id]'";
        $rs = @mysqli_query($con, $sql);
			if ($row = mysqli_fetch_array($rs))
	{	 ?>
                 
                 <h3 style="color:green"><?php echo "คุณ:::$row[name]:::สั่งสินค้าเมื่อวันที่::: $row[this_time]:::เป็นเงินราคา::: $row[total] บาท" ?></h3>
                 <br>
               
                <center>
                <h2>รายการสินค้าที่สั่งซื้อ</h2>
                <br>
                <img  src="../User/photo/bill/<?php echo $row['img'];?> " height='500px'/>
                <br> <br> 
                <td> <center><button class="btn btn-primary" onclick="window.location.href='orders_show.php?page=r_orders'">กลับไปยังหน้าคำสั่งซื้อ</button></center> </td>  </tr>
        
  <?php } ?>
            </div>
 
          </div>
        </div>
        </div>
      </div>
    </main>

    <?php 

$story_text = $_POST['story_text'];
	$sql ="UPDATE orders
SET status = 'Yes'
WHERE id = $_GET[id]";
@mysqli_query($con, $sql);
 include'App/footer.php'; ?>
  </body>
</html>