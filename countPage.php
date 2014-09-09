<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

session_start();
//$_SESSION['view'] = 0;
$_SESSION['view'];
if(isset($_SESSION['view'])) {
$_SESSION['view'] = $_SESSION['view'] + 1;    
}else {
    $_SESSION['view'] =0;

}
echo $_SESSION['view'];


?>
