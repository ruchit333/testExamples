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
    $searchDir = 'D:\\wamp\\www\\test\\MIWW 18TH JUNE\\';
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
                if ( substr($ff, -4) == '.jpg') {
                    $list[] = $ff;

                    //echo $dir.'/'.$ff.'<br/>';
                    global $incFileCount,$Phpfiles;
                    $Phpfiles[] = $ff;
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

$explode = array();


    
if (is_array($Phpfiles) && count($Phpfiles)) {
    echo "<br /> List of PHP files found in: <b>$searchDir</b><br /><br />";
    foreach ($Phpfiles as $phpFilesList) {
//        echo $phpFilesList . '<br />';
        echo htmlentities("<li><a href='Events/18th/".$phpFilesList."' rel='prettyPhoto[gallery1]'><span class='enter-box'></span></a></li>");
        echo '<br />';
    }

    echo "<br />Total number of PHP files found: <b>$incFileCount</b>";
}


       echo '<br /><b>No PHP files found!</b>';
?>