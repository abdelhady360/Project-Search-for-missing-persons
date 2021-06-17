<?php


  // include files End
  $sessinoName ='';
  if(isset($_SESSION['name'])){
    $sessinoUser = $_SESSION['name'];
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
      include $tpl  . 'header.php';
      include $tpl  . 'sidebar.php';
		  include $func . 'function.php';

  // include files End

  // not include :
  // => $notNavbar
  // => $nothead
