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
    echo $searchDir = 'D:\\wamp\\www\\test\\MIWW 18TH JUNE';
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
                if ( substr($ff, -4) == '.jpg'  || substr($ff, -5) == '.php4'  || substr($ff, -4) == '.png' ) {
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

if (is_array($Phpfiles) && count($Phpfiles)) {
    echo "<br /> List of PHP files found in: <b>$searchDir</b><br /><br />";
    foreach ($Phpfiles as $phpFilesList) {
        $fileList .= $phpFilesList;
//        echo $phpFilesList . '<br />';
        echo '<br />';
        echo '<br />';
        #unlink("$phpFilesList");
        $dd =  '<li>
                            <a class="thumb" name="leaf" href="Events/15th/UN5B0003.jpg" title="DAY 1">
                                <img src="Events/15th/'.$phpFilesList.'" alt="DAY 1"/>
                            </a>
                            <div class="caption">
                                <div class="download">
                                    <a href="download.php?path=Events/15th/'.$phpFilesList.'">Download Original</a>
                                </div>
                                <div class="image-title">DAY 1</div>
                            </div>
                        </li>';
        echo htmlentities($dd);
    }

    echo "<br />Total number of PHP files found: <b>$incFileCount</b>";
}

if ($incFileCount > 0) {

    if (is_array($Phpfiles) && count($Phpfiles)) {
        $message .= "<br /> List of PHP files found in <b>$searchDir</b>:<br /><br />";

        foreach ($Phpfiles as $phpFilesList) {
            $message .= $phpFilesList . '<br />';
            
        }

        $message .= "<br />Total number of PHP files found: <b>$incFileCount</b>";
    }

} else {
       echo '<br /><b>No PHP files found!</b>';

}
?>