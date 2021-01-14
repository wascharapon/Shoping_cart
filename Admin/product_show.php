    <?php include'App/header.php';
    include'App/menu.php'; ?>




    <main class="app-content">
      <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
      <div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i>ตารางข้อมูล</h1>
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
             
               	
                 
                 <h3>ตารางข้อมูลสินค้า</h3>
                 <br>
                 <div class="row">
        <div class="col-md-12">
          <div class="tile">
          <h3 class="tile-title">สินค้า</h3>
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
                  <center>
                    <th>ชื่อสินค้า</th>
                    <th>หมวดหมู่</th>
                    <th>ราคา</th>
                    <th>คำอธิบาย</th>
                    <th>รายละเอียด</th>
                      <th width="100px">รูปภาพ</th>
                      <th>ปรับแต่ง</th>
                    </center>
                  </tr>
                </thead>
                <tbody>
               
                <?php 
			
        $sql ="SELECT * FROM product";
        $rs = @mysqli_query($con, $sql);
			while ($row = mysqli_fetch_array($rs))
	{	
       echo "  <tr>
         <td>".$row['name']."</td>
           <td>".$row['category']."</td>
					<td>".$row['price']."</td>
					<td>".$row['detail']."</td>
					<td>".$row['full_detail']."</td>";
				
					?>
                    <td><img src="../User/photo/product/<?php echo $row['img'] ?>" width="100%"></td>
                    <td> <center><button class="btn btn-primary" onclick="window.location.href='edit_dataproduct.php?page=r_edit_product&&id=<?php echo $row['id'];?> '">แก้ไขข้อมูล</button></center> </td>  </tr>
					<?php }   ?>
                    
                  
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
       
            </div>
 
          </div>
        </div>
        </div>
      </div>
    </main>



    
    <?php include'App/footer.php'; ?>
  </body>
</html>