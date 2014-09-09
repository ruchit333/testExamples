<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//$t = "1359477283";
//$g = "430936490";

$dt= '26-08-1990';
$timeStamp = strtotime($dt);
echo $timeStamp;

echo "current Time".$currentTime = time();

echo "</br>";
echo "Difference".$diff = $currentTime - $timeStamp;
echo "</br>";
$dateGet = date('d-m-Y',  $diff);
echo $dateGet;


echo "---For Age---"."</br>";
$age = floor( (strtotime(date('d-m-Y')) - strtotime($dt)) / 31556926);
echo $age ."</br>";

echo "---Is Date--";
$ckDate = checkdate(00,00,0000);
echo $ckDate;

?>
