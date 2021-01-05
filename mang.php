<?php
//khai bao mang 1
$arr1 = array(1, 2, 3, 4, 5, 6);
echo $arr1[1] . "\n";
for ($i = 0; $i < count($arr1); $i++) {
    print_r($arr1[$i] . "\n");
}
echo "**********************"."\n";
rsort($arr1);
foreach ($arr1 as $value) {
    echo $value . "\n";
}
//Mang key-value
$arr2 = array('1' => 'a', '2' => 'b', '3' => 'c');
echo $arr2[1] . "\n";
foreach ($arr2 as $key => $value) {
    echo $key . ':' . $value . "\n";
}
//Mang da chieu
$arr3 = array(
    array('1'=>"abc"),
    array('2'=>'dcf')
);
foreach ($arr3 as $value){
    print_r($value)."\n";
}