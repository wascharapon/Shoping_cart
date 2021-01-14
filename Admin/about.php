    <?php include'App/header.php';
    include'App/menu.php'; ?>




    <main class="app-content">
      <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
      <div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i> เพิ่มข้อมูล</h1>
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
              <form action="php/update_about.php" method="post" runat="server"  id="form1" enctype="multipart/form-data">
               	
                 
                 <h3>คำอธิบายหรือเรื่องราวต่างๆ</h3>
                 <br>
               <?php 
                 $sql ="SELECT * FROM about";
        $rs = @mysqli_query($con, $sql);
			while ($row = mysqli_fetch_array($rs))
	{	 ?>
                 
                  <textarea name="story_text" id="txtMessage" class="ckeditor" cols="45" rows="5"><?php echo $row['text_story'] ?></textarea>
                <br><br>
  <?php } ?>
                 <button class="btn btn-primary" type="submit" ><i class="fa fa-fw fa-lg fa-check-circle"></i>แก้ไข</button>
                  &nbsp;&nbsp;&nbsp;
              <a class="btn btn-secondary" href=""><i class="fa fa-fw fa-lg fa-times-circle"></i>ยกเลิก</a>
                  
        	 </form>
       
            </div>
 
          </div>
        </div>
        </div>
      </div>
    </main>



    
    <?php include'App/footer.php'; ?>
  </body>
</html>