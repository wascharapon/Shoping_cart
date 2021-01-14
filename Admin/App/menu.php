<?php if($_GET['page']=='rw_main'){?>
    <!-- Sidebar menu-->
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="photo/images.png" width="150" height="150"  alt="User Image">
        <div>
          <p class="app-sidebar__user-name"><img src="photo/setting.png"width="50" height="50"></p>
          <p class="app-sidebar__user-designation"></p>
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item active" href="admin.php?page=rw_main"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">หน้าแรก</span></a></li>
         <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">เพิ่มข้อมูล</span><i class="treeview-indicator fa fa-angle-right"></i></a>
                  <ul class="treeview-menu">
            <li><a class="treeview-item" href="banner.php?page=w_banner"><i class="icon fa fa-circle-o"></i>ป้ายโฆษณา</a></li>
            <li><a class="treeview-item" href="product.php?page=w_product"><i class="icon fa fa-circle-o"></i>สินค้า</a></li>
          </ul>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">ตารางข้อมูล</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
          <li><a class="treeview-item" href="banner_show.php?page=r_banner"><i class="icon fa fa-circle-o"></i>ป้ายโฆษณา</a></li>
            <li><a class="treeview-item" href="product_show.php?page=r_product"><i class="icon fa fa-circle-o"></i>สินค้า</a></li>
               <li><a class="treeview-item" href="orders_show.php?page=r_orders"><i class="icon fa fa-circle-o"></i>คำสั่งซื้อ</a></li>
               <li><a class="treeview-item" href="about.php?page=w_about"><i class="icon fa fa-circle-o"></i>เกี่ยวกับ</a></li>
              </ul>
        </li>
        </li>
      </ul>
    </aside>
<?php } elseif($_GET['page']=='w_banner'){?>
    <!-- Sidebar menu-->
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="photo/images.png" width="150" height="150"  alt="User Image">
        <div>
          <p class="app-sidebar__user-name"><img src="photo/setting.png"width="50" height="50"></p>
          <p class="app-sidebar__user-designation"></p>
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item" href="admin.php?page=rw_main"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">หน้าแรก</span></a></li>
         <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">เพิ่มข้อมูล</span><i class="treeview-indicator fa fa-angle-right"></i></a>
                  <ul class="treeview-menu">
            <li><a class="treeview-item active" href="banner.php?page=w_banner"><i class="icon fa fa-circle-o"></i>ป้ายโฆษณา</a></li>
            <li><a class="treeview-item" href="product.php?page=w_product"><i class="icon fa fa-circle-o"></i>สินค้า</a></li>
          </ul>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">ตารางข้อมูล</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
          <li><a class="treeview-item" href="banner_show.php?page=r_banner"><i class="icon fa fa-circle-o"></i>ป้ายโฆษณา</a></li>
            <li><a class="treeview-item" href="product_show.php?page=r_product"><i class="icon fa fa-circle-o"></i>สินค้า</a></li>
               <li><a class="treeview-item" href="orders_show.php?page=r_orders"><i class="icon fa fa-circle-o"></i>คำสั่งซื้อ</a></li>
               <li><a class="treeview-item" href="about.php?page=w_about"><i class="icon fa fa-circle-o"></i>เกี่ยวกับ</a></li>
              </ul>
        </li>
        </li>
      </ul>
    </aside>
<?php }elseif($_GET['page']=='w_product'){?>
    <!-- Sidebar menu-->
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="photo/images.png" width="150" height="150"  alt="User Image">
        <div>
          <p class="app-sidebar__user-name"><img src="photo/setting.png"width="50" height="50"></p>
          <p class="app-sidebar__user-designation"></p>
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item" href="admin.php?page=rw_main"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">หน้าแรก</span></a></li>
         <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">เพิ่มข้อมูล</span><i class="treeview-indicator fa fa-angle-right"></i></a>
                  <ul class="treeview-menu">
            <li><a class="treeview-item" href="banner.php?page=w_banner"><i class="icon fa fa-circle-o"></i>ป้ายโฆษณา</a></li>
            <li><a class="treeview-item active" href="product.php?page=w_product"><i class="icon fa fa-circle-o"></i>สินค้า</a></li>
          </ul>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">ตารางข้อมูล</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
          <li><a class="treeview-item" href="banner_show.php?page=r_banner"><i class="icon fa fa-circle-o"></i>ป้ายโฆษณา</a></li>
            <li><a class="treeview-item" href="product_show.php?page=r_product"><i class="icon fa fa-circle-o"></i>สินค้า</a></li>
               <li><a class="treeview-item" href="orders_show.php?page=r_orders"><i class="icon fa fa-circle-o"></i>คำสั่งซื้อ</a></li>
               <li><a class="treeview-item" href="about.php?page=w_about"><i class="icon fa fa-circle-o"></i>เกี่ยวกับ</a></li>
              </ul>
        </li>
        </li>
      </ul>
    </aside>
<?php }elseif($_GET['page']=='w_about'){?>
    <!-- Sidebar menu-->
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="photo/images.png" width="150" height="150"  alt="User Image">
        <div>
          <p class="app-sidebar__user-name"><img src="photo/setting.png"width="50" height="50"></p>
          <p class="app-sidebar__user-designation"></p>
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item" href="admin.php?page=rw_main"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">หน้าแรก</span></a></li>
         <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">เพิ่มข้อมูล</span><i class="treeview-indicator fa fa-angle-right"></i></a>
                  <ul class="treeview-menu">
            <li><a class="treeview-item" href="banner.php?page=w_banner"><i class="icon fa fa-circle-o"></i>ป้ายโฆษณา</a></li>
            <li><a class="treeview-item" href="product.php?page=w_product"><i class="icon fa fa-circle-o"></i>สินค้า</a></li>
          </ul>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">ตารางข้อมูล</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
          <li><a class="treeview-item" href="banner_show.php?page=r_banner"><i class="icon fa fa-circle-o"></i>ป้ายโฆษณา</a></li>
            <li><a class="treeview-item" href="product_show.php?page=r_product"><i class="icon fa fa-circle-o"></i>สินค้า</a></li>
            <li><a class="treeview-item" href="orders_show.php?page=r_orders"><i class="icon fa fa-circle-o"></i>คำสั่งซื้อ</a></li>
            <li><a class="treeview-item active" href="about.php?page=w_about"><i class="icon fa fa-circle-o"></i>เกี่ยวกับ</a></li>
          </ul>
        </li>
        </li>
      </ul>
    </aside>
<?php }elseif($_GET['page']=='r_banner'){?>
    <!-- Sidebar menu-->
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="photo/images.png" width="150" height="150"  alt="User Image">
        <div>
          <p class="app-sidebar__user-name"><img src="photo/setting.png"width="50" height="50"></p>
          <p class="app-sidebar__user-designation"></p>
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item" href="admin.php?page=rw_main"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">หน้าแรก</span></a></li>
         <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">เพิ่มข้อมูล</span><i class="treeview-indicator fa fa-angle-right"></i></a>
                  <ul class="treeview-menu">
            <li><a class="treeview-item" href="banner.php?page=w_banner"><i class="icon fa fa-circle-o"></i>ป้ายโฆษณา</a></li>
            <li><a class="treeview-item" href="product.php?page=w_product"><i class="icon fa fa-circle-o"></i>สินค้า</a></li>
          </ul>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">ตารางข้อมูล</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
          <li><a class="treeview-item active" href="banner_show.php?page=r_banner"><i class="icon fa fa-circle-o"></i>ป้ายโฆษณา</a></li>
            <li><a class="treeview-item" href="product_show.php?page=r_product"><i class="icon fa fa-circle-o"></i>สินค้า</a></li>
               <li><a class="treeview-item" href="orders_show.php?page=r_orders"><i class="icon fa fa-circle-o"></i>คำสั่งซื้อ</a></li>
               <li><a class="treeview-item active" href="about.php?page=w_about"><i class="icon fa fa-circle-o"></i>เกี่ยวกับ</a></li>
              </ul>
        </li>
        </li>
      </ul>
    </aside>
<?php } elseif($_GET['page']=='r_product'){?>
    <!-- Sidebar menu-->
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="photo/images.png" width="150" height="150"  alt="User Image">
        <div>
          <p class="app-sidebar__user-name"><img src="photo/setting.png"width="50" height="50"></p>
          <p class="app-sidebar__user-designation"></p>
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item" href="admin.php?page=rw_main"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">หน้าแรก</span></a></li>
         <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">เพิ่มข้อมูล</span><i class="treeview-indicator fa fa-angle-right"></i></a>
                  <ul class="treeview-menu">
            <li><a class="treeview-item" href="banner.php?page=w_banner"><i class="icon fa fa-circle-o"></i>ป้ายโฆษณา</a></li>
            <li><a class="treeview-item " href="product.php?page=w_product"><i class="icon fa fa-circle-o"></i>สินค้า</a></li>
          </ul>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">ตารางข้อมูล</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
          <li><a class="treeview-item" href="banner_show.php?page=r_banner"><i class="icon fa fa-circle-o"></i>ป้ายโฆษณา</a></li>
            <li><a class="treeview-item active" href="product_show.php?page=r_product"><i class="icon fa fa-circle-o"></i>สินค้า</a></li>
               <li><a class="treeview-item" href="orders_show.php?page=r_orders"><i class="icon fa fa-circle-o"></i>คำสั่งซื้อ</a></li>
               <li><a class="treeview-item " href="about.php?page=w_about"><i class="icon fa fa-circle-o"></i>เกี่ยวกับ</a></li>
              </ul>
        </li>
        </li>
      </ul>
    </aside>
<?php } elseif($_GET['page']=='r_orders'){?>
    <!-- Sidebar menu-->
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="photo/images.png" width="150" height="150"  alt="User Image">
        <div>
          <p class="app-sidebar__user-name"><img src="photo/setting.png"width="50" height="50"></p>
          <p class="app-sidebar__user-designation"></p>
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item" href="admin.php?page=rw_main"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">หน้าแรก</span></a></li>
         <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">เพิ่มข้อมูล</span><i class="treeview-indicator fa fa-angle-right"></i></a>
                  <ul class="treeview-menu">
            <li><a class="treeview-item" href="banner.php?page=w_banner"><i class="icon fa fa-circle-o"></i>ป้ายโฆษณา</a></li>
            <li><a class="treeview-item" href="product.php?page=w_product"><i class="icon fa fa-circle-o"></i>สินค้า</a></li>
          </ul>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">ตารางข้อมูล</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
          <li><a class="treeview-item" href="banner_show.php?page=r_banner"><i class="icon fa fa-circle-o"></i>ป้ายโฆษณา</a></li>
            <li><a class="treeview-item" href="product_show.php?page=r_product"><i class="icon fa fa-circle-o"></i>สินค้า</a></li>
               <li><a class="treeview-item active" href="orders_show.php?page=r_orders"><i class="icon fa fa-circle-o"></i>คำสั่งซื้อ</a></li>
               <li><a class="treeview-item " href="about.php?page=w_about"><i class="icon fa fa-circle-o"></i>เกี่ยวกับ</a></li>
              </ul>
        </li>
        </li>
      </ul>
    </aside>
<?php } else{?>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="photo/images.png" width="150" height="150"  alt="User Image">
        <div>
          <p class="app-sidebar__user-name"><img src="photo/setting.png"width="50" height="50"></p>
          <p class="app-sidebar__user-designation"></p>
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item" href="admin.php?page=rw_main"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">หน้าแรก</span></a></li>
         <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">เพิ่มข้อมูล</span><i class="treeview-indicator fa fa-angle-right"></i></a>
                  <ul class="treeview-menu">
            <li><a class="treeview-item" href="banner.php?page=w_banner"><i class="icon fa fa-circle-o"></i>ป้ายโฆษณา</a></li>
            <li><a class="treeview-item" href="product.php?page=w_product"><i class="icon fa fa-circle-o"></i>สินค้า</a></li>
          </ul>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">ตารางข้อมูล</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
          <li><a class="treeview-item" href="banner_show.php?page=r_banner"><i class="icon fa fa-circle-o"></i>ป้ายโฆษณา</a></li>
            <li><a class="treeview-item" href="product_show.php?page=r_product"><i class="icon fa fa-circle-o"></i>สินค้า</a></li>
               <li><a class="treeview-item" href="orders_show.php?page=r_orders"><i class="icon fa fa-circle-o"></i>คำสั่งซื้อ</a></li>
               <li><a class="treeview-item " href="about.php?page=w_about"><i class="icon fa fa-circle-o"></i>เกี่ยวกับ</a></li>
          </ul>
        </li>
        </li>
      </ul>
    </aside>
<?php } ?>