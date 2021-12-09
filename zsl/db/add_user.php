<?php

if(!empty($_POST)){
    /*foreach ($_POST as $key -> $value){
        if(empty($value)){
                echo $key;
        }
    }not work hehe*/
}
require_once './connect.php';
$sql="INSERT INTO `users` (`id`, `city_id`, `name`, `surname`, `birthdat`, `data_dodania`) VALUES (NULL, '$_POST[cityid]', '$_POST[name]', '$_POST[surname]', '$_POST[birthday]', CURRENT_TIMESTAMP);";
$connect->query($sql);
if($connect->affected_rows==1){
    header('location: ../0_4_db_insert.php?error="prawidłowo dodano użytkownika"');
}
else{
    header('location: ../0_4_db_insert.php?error="nie dodano użytkownika"');
}
$connect->close();
//header('location: ../0_4_db_insert.php');

?>