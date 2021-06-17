<?php
include 'conn.php';


  // include files End
  $sessinoUser ='';
  if(isset($_SESSION['user'])){
    $sessinoUser = $_SESSION['user'];
  }
  

	// Routes
    	$conn       = 'conn.php';                   // content Directory
    	$tpl        = 'includes/templates/';        // Templates Directory
    	$css        = 'styles/dist/css/';           // Css Directory
      $js         = 'styles/dist/js/';            // Js Directory
      $func		    = 'includes/functions/';        //
      $plugins    = 'styles/plugins/';            // Plugins Directory
      $boower     = 'styles/bower_components/';   //
      $plugins     = 'styles/plugins/';   //
      $head2      = 'includes/templates/login/';
	// Routes End
  // include files

      include $tpl  . 'head.php';
      include $tpl  . 'navbar_users.php';
		  include $func . 'function.php';




  // not include :
  // => $notNavbar
  // => $nothead
