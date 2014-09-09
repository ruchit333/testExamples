<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$testArray = array(
    "member1" => array(
        "name" => "ruchit",
        "age" => "23",
        "country" => "UK"
    ),
    "member2" => array(
        "name" => "vikas",
        "age" => "23",
        "country" => "AUS"
    ),
    "member3" => array(
        "name" => "Vipul bhai",
        "age" => "30",
        "country" => "CANADA"
    ),
    "member4" => array(
        "name" => "BharatDan",
        "age" => "25",
        "country" => "USA"
    )
);

foreach($testArray as $test) {    
    while(list($key,$value) = each($test)) {
        echo "$key:".""."$value"."<br/>";
    }
}
?>