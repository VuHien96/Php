<?php
$file = fopen('index.text','r');
//get 1 dong;
echo fgets($file);
//get toàn bộ nội dung
echo fread($file,filesize("index.text"));

//Đọc đến cuối file
while (!feof($file)){
    echo fgets($file)."<br>";
}
