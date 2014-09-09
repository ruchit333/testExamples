<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$output = 'Clean this copy of invalid non ASCII $£ characters';
$output = preg_replace('/[^(\x20-\x7F\p{Sc})]/u','',$output);  
echo $output;

$string = ';")<br>kk23?!¥$€%'; 
$new_string =preg_replace('/[^(\x20-\x7f)]*/s','',$string);
echo $new_string;
?>
