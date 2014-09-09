<?php
    $sendMail = mail("vipul.p@communicationcrafts.com", "Test for mail", "Testing","ruchit.p@communicationcrafts.com");
    if ($sendMail){
            echo "Mail has been successfully send.";
    } else {
        echo "Mail has not been successfully send.";
    }
?>
