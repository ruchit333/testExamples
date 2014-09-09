<?php
    function unzip($location,$newLocation){

        if(exec("unzip $location",$arr)){
            mkdir($newLocation);
            
            for($i = 1;$i< count($arr);$i++){
                
                $file = trim(preg_replace("~inflating: ~","",$arr[$i]));
                copy($location.'/'.$file,$newLocation.'/'.$file);
                unlink($location.'/'.$file);
            }
            return TRUE;
        }else{
            return FALSE;
        }
    }
?> 

<?php
//include 'functions.php';
if (unzip('zipedfiles/wordsmith_2014.zip','unziped/newWordSmith_2014.txt'))
    echo 'Success!';
else
    echo 'Error';
?>