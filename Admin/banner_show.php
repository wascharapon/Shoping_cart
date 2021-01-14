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
             
               	
                 
                 <h3>ตารางข้อมูลป้ายโฆษณา</h3>
                 <br>
                 <div class="row">
        <div class="col-md-12">
          <div class="tile">
          <h3 class="tile-title">ป้ายโฆษณา</h3>
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
             
                    <th width="100px">ลำดับ</th>
                    <th width="300px">รูปภาพ</th>
                    <th> <center>ลงเมื่อวันที่ </center></th>
                    <th><center>ลบข้อมูล </center></th>
                   
                  </tr>
                </thead>
                <tbody>
               
                <?php 
        $sql ="SELECT * FROM banner";
        $rs = @mysqli_query($con, $sql);
			while ($row = mysqli_fetch_array($rs))
	{	
       echo "  <tr>
         <td>".$row['id']."</td>";	
					?>
                    <td><img src="../User/photo/banner/<?php echo $row['img'];?>" width="100%"></td>
                    <td><center><?php echo $row['this_time']; ?></center></td>
                    <td> <center><button class="btn btn-primary" style="background-color:red;border-color:red"  onclick="window.location.href='php/delete_banner.php?id=<?php echo $row['id'];?>'">ลบทิ้ง</button></center> </td>  </tr>
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