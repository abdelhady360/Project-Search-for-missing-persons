<?php if(isset($_SESSION["user"])){  ?>
  <!-- Navbar-->
  <header class="header">
  <!-- Navbar-->
    <nav class="navbar navbar-expand-lg fixed-top shadow navbar-light bg-white">
      <div class="container-fluid">
        <div class="d-flex align-items-center">
            <a class="navbar-brand py-1" href="index.php">
                <img src="styles/img/logo/logo.svg" alt="Directory logo">
            </a>
        </div>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars"></i>
          </button>
        <!-- Navbar Collapse -->
        <div class="navbar navbar-light " id="navbarCollapse">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link"  href="index.php" >
                 الصفحه الرئيسية</a>
            </li>
            <li class="nav-item dropdown"><a class="nav-link" ></a></li>
            <!-- Megamenu-->
            <li class="nav-item ">
                <a class="nav-link " href="search.php" >البحث عن المفقودين</a>
            </li>
            <li class="nav-item dropdown"><a class="nav-link" ></a></li>
            <li class="nav-item">
                <a class="nav-link" href="add_user.php"> بلاغ جديد </a>
            </li>            
            <li class="nav-item dropdown"><a class="nav-link" ></a></li>

            <li class="nav-item dropdown"><a class="nav-link" ></a></li>
            <li class="nav-item dropdown"><a class="nav-link" ></a></li>
            <li class="nav-item dropdown ml-lg-3 text-right">
                <a id="userDropdownMenuLink" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="avatar avatar-sm avatar-border-white mr-2" src="styles/img/avatar/users.png" alt="">
                </a>
              <div class="dropdown-menu dropdown-menu-right text-right" aria-labelledby="userDropdownMenuLink">
              <a class="dropdown-item text-right" href="getuser.php?seting">
                  معلومات شخصية
              </a>
                <div class="dropdown-divider text-right">
                  </div>
                  <a class="dropdown-item text-right" href="sign-out.php">
                      <i class="fas fa-sign-out-alt mr-2 text-right"></i>تسجيل الخروج</a>
              </div></li></ul></div> </div></nav></header><br><br>
<?php }

else{ ?>
<header class="header">
  <nav class="navbar navbar-expand-lg fixed-top shadow navbar-light bg-white">
    <div class="container-fluid">
      <div class="d-flex align-items-center">
          <a class="navbar-brand py-1" href="index.php">
              <img src="styles/img/logo/logo.svg" alt="Directory logo">
          </a>
      </div>
      <div class="d-flex justify-content-between">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <img src="styles/img/png/menu.png" width="20" >
        </button>
        </div>
      <!-- Navbar Collapse -->
   <div class="d-flex flex-row">
    <div class="navbar-collapse collapse" id="navbarCollapse">
      <div class=" " id="">
        <ul class="navbar-nav ml-auto ">
            <li class="nav-item dropdown">
              <a class="nav-link"  href="" >
               </a>
          </li>
            <!-- Search form -->
          <li class="nav-item dropdown">
              <a class="nav-link"  href="" >
               </a>
          </li><li class="nav-item dropdown">
              <a class="nav-link"  href="" >
               </a>
          </li>
            <li class="nav-item dropdown">
              <a class="nav-link"  href="index.php" >
               الصفحه الرئيسية</a>
          </li>
          <!-- Megamenu-->
          <li class="nav-item ">
              <a class="nav-link " href="search.php" >المفقودين</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="Aboutus.php">من نحن</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="callus.php">اتصل بنا</a>
          </li>
          <li dir="ltr" class="nav-item">
              <a dir='ltr' class="btn btn-primary" href="sign_in.php">تسجيل الدخول</a>
            </li></ul></div> </div> </div></nav></header>
<?php } ?>