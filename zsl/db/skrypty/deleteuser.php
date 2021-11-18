<?php

if(!empty($_GET['userId'])){
    require_once './connect.php';
    $sql="DELETE FROM `users` WHERE `users`.`id` = $_GET[userId]";
    $connect->query($sql);

    if($connect->affected_rows){
        //header('location:../8_3_db_select_table_delete.php?error=prawidłowo usunięto użytkownika'
    }
}

?>