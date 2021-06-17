<?php
// SELECT check
function check($selsct ,$form, $value){
    global $connect;
        $statement = $connect->prepare("SELECT $selsct FROM $form WHERE $selsct = ? ");
        $statement->execute(array($value));
        $count = $statement->rowCount();
            return $count;
}

// COUNT
function colun($item, $table){
    global $connect;
        $query = " SELECT COUNT($item) FROM $table ";
        $statement = $connect->prepare($query);
        $statement->execute();
            return $row = $statement -> fetchColumn();
}

// ###