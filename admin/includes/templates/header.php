<header class="main-header">
  <!-- Logo -->
    <a href="" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>الادمن</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only"></span>
      </a>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="http://localhost/Project/index.php" class="dropdown-toggle" target="_blank">
              <img src="styles/dist/img/SHOW.png" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo'SHOW LIVE' ?> </span>
            </a>
            <ul class="dropdown-menu">
            </ul>
          </li>          
          <li class="dropdown user user-menu">
            <a href="dashboard.php" class="dropdown-toggle">
              <img src="styles/dist/img/user.png" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $_SESSION['name'] ?> </span>
            </a>
            <ul class="dropdown-menu">
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
        </ul>
      </div>
    </nav>
  </header>
  <!-- right side column. contains the logo and sidebar -->