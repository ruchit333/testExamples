<?php
$Phpfiles = array();
$incFileCount = 0; 
function listFolderFiles($dir)
{
    $ffs = scandir($dir);
    $i = 0;
    $list = array();
    foreach ( $ffs as $ff ){
        if ( $ff != '.' && $ff != '..' ) {
            if ( strlen($ff)>=5 ) {
                if ( substr($ff, -4) == '.php' ) {
                    $list[] = $ff;
//                    echo $dir.'/'.$ff.'<br/>';
                    global $incFileCount,$Phpfiles;
                    $Phpfiles[] = $dir.'/'.$ff.'<br />';
                    $incFileCount++;
                }    
            }       
            if( is_dir($dir.'/'.$ff) ) {
                    listFolderFiles($dir.'/'.$ff);
            }
        }
    }
    return $list;
}

$files = array();
$files = listFolderFiles($_SERVER['DOCUMENT_ROOT'].'test');
$fileList = '';
foreach($Phpfiles as $phpFilesList) {
 $fileList .= $phpFilesList;
 
};
//echo "<pre>"; print_r($fileList);
//echo $incFileCount; 

if ($incFileCount > 0) {
    echo "Php File Found<br/>";
    echo $fileList."<br/>";
}
?>