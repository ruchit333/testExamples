<?php
    if (strstr($_SERVER['HTTP_USER_AGENT'],'iPhone') || strstr($_SERVER['HTTP_USER_AGENT'],'iPod')) { 
        header('Location: http://www.cardonadesigns.com/iphone');
        exit();
    } else {
        echo "sorry you cant open this";
    }
?>
