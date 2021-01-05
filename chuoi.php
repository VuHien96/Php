<?php
$str = "Hello World";

//Độ dài của chuỗi;
echo strlen($str)."\n";

//Đến số lượng từ
echo str_word_count($str)."\n";

//Hàm đảo ngược chuỗi
echo strrev($str)."\n";

//Hàm tìm vị trí bắt đầu
echo strpos($str,"Hello")."\n";

//Hàm nối chuỗi
$str2 = "ahihi";
echo $str." ".$str2."\n";