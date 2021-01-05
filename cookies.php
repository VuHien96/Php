<?php
// Tạo cookies
$cookie_name = 'user';
$cookie_value='John';
setcookie($cookie_name, $cookie_value, time() + 300);
echo $_COOKIE[$cookie_name];

//Xoa cookie
setcookie($cookie_name,"",time() -3600);
echo $_COOKIE[$cookie_name];