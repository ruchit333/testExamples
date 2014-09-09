<?php
session_start();
    if (isset($_SESSION["htmlText"]) && $_SESSION["htmlText"]) {
       echo $_SESSION["htmlText"]; 
    }
?>

