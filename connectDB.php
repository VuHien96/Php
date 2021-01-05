<?php
$servername='localhost';
$username='root';
$password = '';

//Kết nối dùng mysqli
$connect = mysqli_connect($servername,$username,$password);
if ($connect){
    echo 'connect success';
}else{
    echo 'connect fail';
}

//Kết nối dùng PDO
//$connect = new PDO("mysql:host=$servername",$username,$password);
//$connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
//echo 'Connected';

mysqli_close($connect);