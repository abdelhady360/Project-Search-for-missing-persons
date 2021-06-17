<?php 
//  session star
  session_start();
// ./session star

// SESSION
  if(isset($_SESSION["username"])){
// ./SESSION


//  Start pageTitle
  $pageTitle ='لوحة التحكم';
//  EnspageTitle

// include
      include 'init.php'; 
      include $conn; 
// End include

// End section
 include 'includes/templates/section.php'; 
// End section

// include// include
include 'includes/templates/footer.php'; 
// End include
// header
}else{
	header('location:index.php');
}
// ./ header
	?>