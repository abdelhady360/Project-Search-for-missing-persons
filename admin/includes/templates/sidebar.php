<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-right image">
          <img src="styles/dist/img/user.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-right info">
        <p><?php echo $_SESSION['name']   ?></p>
          <a ><i class="fa fa-circle text-success"></i> اونلاين</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
        <li class="header">مرحبا بعودتك</li>
        <li class="active  treeview">
          <a href="#">
          <i class="fas fa-tachometer-alt fa-lg"></i> <span>لوحة التحكم</span>
            <span class="pull-left-container">
              <i class="fa fa-angle-right pull-left"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="">
                <a href="<?php echo 'dashboard.php' ?>"><i class="fas fa-poll fa-lg"></i> لوحة القيادة</a>
            </li>
            <li class="btnoo">
                <a href="<?php echo 'MissingNew.php?do=Mange' ?>"><i class="fas fa-user-secret fa-lg"></i> مفقودين </a>
            </li>
            <li class="">
                <a href="<?php echo 'users.php' ?>"><i class="fas fa-users fa-lg"></i> المستخدمين</a>
            </li>
          </ul>
        </li>
      </ul>
      <!-- sidebar menu: : style can be found in sidebar.less -->

      <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
        <li class="header"> </li>
        <li class=" treeview">
          <a href="#">
          <i class="fas fa-user-cog fa-lg"> </i><span> المعلومات الشخصية </span>
            <span class="pull-left-container">
              <i class="fa fa-angle-right pull-left"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class=""><a href="edit_info.php?doo=edit&id=<?php echo $_SESSION['ID'] ?>"><i class="far fa-user-circle fa-lg"></i> تعديل معلوماتي</a></li>
            <li><a href="<?php echo 'sign-out.php' ?>"><i class="fas fa-sign-out-alt fa-lg"></i> خروج</a></li>
          </ul>
        </li>
      </ul>
      <!-- sidebar menu: : style can be found in sidebar.less -->
    </section>
    <!-- /.sidebar -->
  </aside>
