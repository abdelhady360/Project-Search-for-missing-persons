  <?php
// Session Start
  session_start(); 
// ./Session Start

// pageTitle
  $pageTitle = "بلاغ عن مفقودين";
// ./pageTitle

// Init
  include 'init.php'; 
// ./Init

// Session
  if(isset($_SESSION['user'])){ ?>
<!-- ./Session -->

<!-- Navbar-->
  <?php include 'includes/templates/navbar_users.php'; ?>
<!-- ./Navbar -->

<!-- Add Missing-->
  <?php include 'includes/templates/form_Search.php'; ?>
<!-- ./Add Missing-->       

<!-- Footer -->
  <?php include 'includes/templates/footer.php'; ?>
<!-- ./Footer -->

<!-- Header -->
  <?php } else{ header('Location: index.php'); }   ?>
<!-- ./Header -->