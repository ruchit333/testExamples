<?php
$array1 = array("ruchit" => "4", "vikas" => "3" , "bharatDan" => "2" ,"vipulbhai" => "1");
$array2 = array("vipulbhai" => "1" ,"ruchit" => "5" , "vikas" => "7");
$arrayExist = array_key_exists("chillar", $array1);
if($arrayExist) {
    echo "exits";
} else {
    echo "sorry"."<br />";
}

$arrayDiff = array_diff_assoc($array1, $array2);
echo "<pre>";
print_r($arrayDiff);
echo "</pre>";
?>

