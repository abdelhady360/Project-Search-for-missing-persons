<?php
//
function getM($w,$v){
   global $connect;

   $query = " SELECT * FROM missing where $w = ?  order by id desc";
   $getItems = $connect->prepare($query);
   $getItems->execute(array($v));
   $items = $getItems -> fetchAll();
return $items;
}
//
function getItems(){
   global $connect;

   $query ="SELECT * FROM `missing`  \n" . "ORDER BY `missing`.`add_date`  DESC";
   $statement = $connect->prepare($query);
   $statement->execute();
   $row = $statement -> fetchAll();
return $row;
}
//
function getItemsUser($user_id){
   global $connect;

   $query = " SELECT * FROM missing where user_id = ?  order by id desc";
   $getItems = $connect->prepare($query);
   $getItems->execute(array($user_id));
   $rows = $getItems -> fetchAll();
return $rows;
}
//
function check($selsct ,$form, $value){
   global $connect;

   $statement = $connect->prepare("SELECT $selsct FROM $form WHERE $selsct = ? ");
   $statement->execute(array($value));
   $count = $statement->rowCount();

   return $count;

}
//
