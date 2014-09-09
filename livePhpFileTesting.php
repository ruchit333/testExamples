<?php
$Phpfiles = array();
$incFileCount = 0; 

function listFolderFiles($dir)
{
    echo $dir."<br/>";
    $ffs = scandir($dir);
    $i = 0;
    $list = array();
    foreach ( $ffs as $ff ) {
        if ( $ff != '.' && $ff != '..' ) {
            if ( strlen($ff)>=5 ) {
                if ( substr($ff, -4) == '.php'
                    || substr($ff, -5) == '.php3'
                    || substr($ff, -5) == '.php4'
                    || substr($ff, -5) == '.php5'
                    || substr($ff, -6) == '.phtml'
                ) {
                    $list[] = $ff;
                    
                    //echo $dir.'/'.$ff.'<br/>';
                    global $incFileCount,$Phpfiles;
                    $Phpfiles[] = $dir.'/'.$ff;
                    $incFileCount++;
                }    
            }       
            if ( is_dir($dir.'/'.$ff) ) 
                    listFolderFiles($dir.'/'.$ff);
        }
    }
    
    return $list;
}

$files = array();

//$files = listFolderFiles($_SERVER['DOCUMENT_ROOT'].'blog_post');
//echo "<pre>";
//print_r($_SERVER);
//echo "</pre>";
$files = listFolderFiles($_SERVER['DOCUMENT_ROOT'].'file_testing');

$fileList = '';

foreach ($Phpfiles as $phpFilesList) {
    $fileList .= $phpFilesList;
    
    unlink("$phpFilesList");
}
echo "<pre>";
print_r($fileList);
echo "</pre>";

if ($incFileCount > 0) {
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
    $to = "vikas.patel@communicationcrafts.com";
    $message = "";
    
    // Additional headers
    $headers .= 'To: Vikas<vikas.patel@communicationcrafts.com>, Ruchit <ruchit.p@communicationcrafts.com>' . "\r\n";
    $headers .= 'From: Vipul Prajapati <vipul.p@communicationcrafts.com>' . "\r\n";
    $headers .= 'Cc: vipul.p@communicationcrafts.com' . "\r\n";
    
    //$headers .= 'Bcc: birthdaycheck@example.com' . "\r\n";
    $message .= $fileList;
    $message .= $incFileCount. " no. of files found";
    $subject = 'PHP File List';
//    $send = mail($to, $subject, $message, $headers);
    echo $message."</br>";
//    if ($send) {
//        echo "Mail has been successfully sent<br /><br />"; 
//    } else {
//        echo "Mail has not been successfully sent<br /><br />"; 
//    }
} else {
       echo "Php file not found";
}
?>