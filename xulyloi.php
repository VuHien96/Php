<?php
//Xu ly loi
if (!file_exists('abc.txt')){
//    die("File not found");
}else{
    $file = fopen('abc.txt','r');
}

function customError($error,$errstr){
    echo "<br>".date('y-m-d H:i:s')." Error: </br> [$error] $errstr";
}
set_error_handler("customError");
trigger_error("Loi",E_USER_WARNING);