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
                  <th><center>ลำดับ</center></th>
                    <th><center>ชื่อผู้สั่ง</center></th>
                    <th><center>ที่อยู่</center></th>
                    <th><center>โซเชียล</center></th>
                    <th><center>ยอดสั่งซื้อ</center></th>
                    <th><center>วันที่</center></th>
                      <th width="100px"><center>รายการจอง</center></th>
                      <th><center>สถานะ</center></th>
                    </center>
                  </tr>
                </thead>
                <tbody>
               
                <?php 
			
        $sql ="SELECT * FROM orders order by status asc";
        $rs = @mysqli_query($con, $sql);
			while ($row = mysqli_fetch_array($rs))
	{	
       echo "  <tr>
       <td><center>".$row['id']."  </center></td>
         <td><center>".$row['name']."  </center></td>
           <td><center>".$row['address']."  </center></td>
					<td><center>".$row['social']."  </center></td>
					<td><center>".$row['total']."  </center></td>
					<td><center>".$row['this_time']."  </center></td>";
				
					?>
                    <td><img src="../User/photo/bill/<?php echo $row['img'];?>" width="250px"></td>
                    <?php if($row['status']=='No') {?>
                    <td> <center><button class="btn btn-primary" onclick="window.location.href='orders_show_photo.php?id=<?php echo $row['id'];?> '">ยังไม่ได้อ่าน</button></center> </td>  </tr>
                    <?php }else{ ?>
                    <td> <center><button style="background-color:red;border-color:red" class="btn btn-primary" onclick="window.location.href='orders_show_photo.php?id=<?php echo $row['id'];?> '">อ่านแล้ว</button></center> </td>  </tr>
                    
                    <?php }}   ?>
                    
                   
                </tbody>
              </table>
              
            </div>
            
          </div>
        </div>
      </div>
        <td> <center><button style="background-color:red;border-color:red" class="btn btn-primary" onclick="window.location.href='php/delete_orders.php'">ลบที่อ่านแล้ว</button></center> </td>  </tr>
            </div>
 
          </div>
        </div>
        </div>
      </div>
    </main>



    
    <?php include'App/footer.php'; ?>
  </body>
</html>