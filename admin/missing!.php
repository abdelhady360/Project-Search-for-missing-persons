<?php 
  session_start();
    if(isset($_SESSION["username"])){
//  Start pageTitle
  $pageTitle ='لوحة التحكم';
//  EnspageTitle
// include
      include 'init.php'; 
// End include
?>
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>كل المفقودين</h1>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <!-- AREA CHART -->
          <div class="box box-danger" >
            <div class="box-header with-border">
                <img src="styles/dist/img/missing/1.jpg" width="100%" />
                <br> <br>
                <p class="text-center">نورهان محمد</p>
                <a class="btn btn-info btn-block btn-lg" href="info_absentee.php">عرض </a>
            </div> </div></div>
        <!-- /.col (LEFT) -->
        <div class="col-md-6">
          <!-- AREA CHART -->
          <div class="box box-danger">
            <div class="box-header with-border">
                <img src="styles/dist/img/missing/2.jpg" width="100%" />
                <br> <br>
                <p class="text-center">نورهان محمد</p>
                <a class="btn btn-info btn-block btn-lg" href="">عرض </a>
            </div> </div> </div> </div></section> </div>
<?php
// include// include
include 'includes/templates/footer.php'; 
// End include
}else{
	header('location:index.php');
}
	?>