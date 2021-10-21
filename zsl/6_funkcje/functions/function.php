<?php

function show(){
    print_r($_POST);
};

function showName($name){
    return "podane imię to ".$name;
};

function stringValidate($name, $len){
    $name=trim($name);
    $name=ucfirst(strtolower($name));
    $name=substr($name,0,$len);
    return $name ;
}

?>