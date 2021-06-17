<?php

session_start(); //  start the session

session_unset(); // unseet the data

session_destroy();  // destroy the session

header('location: index.php'); 
exit();