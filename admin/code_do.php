<?php 
  session_start();
    if(isset($_SESSION["username"])){
// not include
  $notSmallBoxes ='';
// End not include 
//  Start pageTitle
$pageTitle ='';
//  EnspageTitle
// include
      include 'init.php'; 
      include $conn;
// End include
$do = isset($_GET['do']) ? $_GET['do'] : 'Mange'; 

  if($do == 'Mange'){ // Mamge page

  }
  elseif(@$do == 'add') { // add page

  }
  elseif($do == 'edit') { // edit page

  
  }
  elseif(@$do == 'inssert') { // inssert page


  } 
  elseif ($do == 'update') { // Update page


  }
  elseif($do == 'delete') { // add page


    }
  
  else {
  
    echo 'You are not authorized';
  }
    //  include
    include $tpl . 'footer.php';
    // not include
  }
else{ header('location:index.php'); }
	?>