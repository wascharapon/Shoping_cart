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
              <form action="php/add_product.php" method="post" runat="server"  id="form1" enctype="multipart/form-data">
               	
                 
                 <h3>เพิ่มสินค้า</h3>
                 <br>
                <div class="form-group">
                  <label class="control-label">ชื่อสินค้า</label>
                  <input type='text' name='name'   />
                </div>
        
                <div class="form-group">
                  <label class="control-label">ราคา</label>
                  <input type='number'  name='price'   />
                </div>
                    <div class="form-group">
                  <label class="control-label">หมวดหมู่สินค้า</label>
                  <input type='text'name='category'   />
                </div>
                <div class="form-group">
                  <label class="control-label">คำอธิบาย</label>
                  <br>
                  <textarea name="detail"></textarea>
                </div>
                <br>  <br>
                <div class="form-group">
                  <label class="control-label"></label>
                  <input type='file'  name='Logo'  onchange="readURL(this);" />
                </div>
    
                <center>
                <h2>ตัวอย่างรูปภาพ</h2>
                <img id="blah" src="" />
                <br><br>
             
                   <div class="form-group">
                   <h2>รายละเอียดสินค้า</h2>
                  <br>
             
                 
                  <textarea name="full_detail" id="txtMessage" class="ckeditor" cols="45" rows="5"></textarea>
                <br><br>

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