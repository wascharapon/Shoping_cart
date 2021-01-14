    <?php include'App/header.php';
    include'App/menu.php'; ?>




    <main class="app-content">
      <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
      <div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i> หน้าแรก</h1>
          <p></p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        </ul>
         </div>
        <div class="row" style="margin-left:30%">
        <div class="col-md-6">
          <div class="tile"> 
            <div class="tile-body" style="font-size:18px">
              <form action="php/editpass.php" method="post">
               	<h3>เปลี่ยนรหัสผ่าน</h3>
                <br>
                <div class="form-group">
                  <label class="control-label">รหัสผ่านเดิม</label>
                  <input class="form-control" name="pass" type="password" placeholder=""required>
                </div>
    
                <div class="form-group">
                  <label class="control-label">รหัสผ่านใหม่</label>
                        <input class="form-control" name="pass_new" type="password" placeholder=""required>
                </div>
                      <div class="form-group">
                  <label class="control-label">ยืนยันรหัสผ่านใหม่</label>
                        <input class="form-control" name="confirm_pass" type="password" placeholder=""required>
                </div>
                    <center>
                 <button class="btn btn-primary" type="submit" ><i class="fa fa-fw fa-lg fa-check-circle"></i>ตกลง</button>
                  &nbsp;&nbsp;&nbsp;
              <a class="btn btn-secondary" href=""><i class="fa fa-fw fa-lg fa-times-circle"></i>ยกเลิก</a>
                    </center>
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