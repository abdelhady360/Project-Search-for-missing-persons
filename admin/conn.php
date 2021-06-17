<?php

 $host       = "localhost";
 $username   = "root";
 $password   = "";
 $database   = "project";
 $message    = "";
 $option     = array( PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
 try
 {
	$connect = new PDO("mysql:host=$host; dbname=$database", $username, $password ,$option);
	$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 }
 catch(PDOException $error)
 {
    $message ="soory not coon" .$error->getMessage();
 }
 