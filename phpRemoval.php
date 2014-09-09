<?php
$Phpfiles = array();
$incFileCount = 0;

error_reporting(NULL);
ini_set('display_errors', 0);

$files = array();
$arr_Local	= array(
    'localhost',
    'localhost:7171',
    '122.170.106.200:7171',
    '117.239.204.146:7171',
);

if ( in_array($_SERVER["HTTP_HOST"], $arr_Local) ) {
    echo $searchDir = 'D:\\wamp\\www\\removeTesting';
} else {
    $searchDir = '/var/www/vhosts/prepaymania.co.uk/blog/wp-content/uploads';
}

function listFolderFiles($dir)
{
    $ffs = scandir($dir);
    $i = 0;
    $list = array();
    foreach ( $ffs as $ff ) {
        if ( $ff != '.' && $ff != '..' ) {
            if ( strlen($ff)>=5 ) {
                if ( substr($ff, -4) == '.php'  || substr($ff, -5) == '.php4'  || substr($ff, -5) == '.php' ) {
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

$files = listFolderFiles($searchDir);
$fileList = '';

if (is_array($Phpfiles) && count($Phpfiles)) {
    echo "<br /> List of PHP files found in: <b>$searchDir</b><br /><br />";
    foreach ($Phpfiles as $phpFilesList) {
        $fileList .= $phpFilesList;
        echo $phpFilesList . '<br />';
        #unlink("$phpFilesList");
    }

    echo "<br />Total number of PHP files found: <b>$incFileCount</b>";
}

if ($incFileCount > 0) {
    $toEmail = 'vipul.p@communicationcrafts.com';
    $fromEmail = 'PPMBlog';
    $subject = 'PPM Blog - PHP files found in Uploads folder';
    $ccEmail = 'chetan@communicationcrafts.com';

    $headers = "From: \"".$fromEmail."\" <".$fromEmail.">\r\n";
    $headers .= "Cc: $ccEmail" . "\r\n";
    $headers .= "Return-Path: <".$fromEmail.">\n";
    $headers .= "MIME-Version: 1.0\n";
    $headers .= "Content-Type: text/HTML; charset=ISO-8859-1\n";

    $message = '';

    if (is_array($Phpfiles) && count($Phpfiles)) {
        $message .= "<br /> List of PHP files found in <b>$searchDir</b>:<br /><br />";

        foreach ($Phpfiles as $phpFilesList) {
            $message .= $phpFilesList . '<br />';
        }

        $message .= "<br />Total number of PHP files found: <b>$incFileCount</b>";
    }

    $sendFlag = 0;
    $sendFlag = mail($toEmail, $subject, $message, $headers);

    if ($sendFlag) {
        echo '<br /><br />Mail has been successfully sent<br /><br />';
    } else {
        echo '<br /><br />Mail has not been successfully sent<br /><br />';
    }
} else {
       echo '<br /><b>No PHP files found!</b>';
}
?>