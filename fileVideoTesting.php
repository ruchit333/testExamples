<?php
$path = $_SERVER["DOCUMENT_ROOT"];
$host = $_SERVER['HTTP_HOST'];
$directory = $path."/pccc_booker/home_page_video/";
$dir = $host. "/pccc_booker/home_page_video/";


if ($handle = opendir($directory)) {
    while (false !== ($file = readdir($handle)))
    {
        if (($file != ".") 
         && ($file != ".."))
        {
            $thelist .= '<LI><a href="'.$file.'">'.$file.'</a>';
        }
    }

    closedir($handle);
}

if(is_dir($directory)) {
    if(count(scandir($directory)) > 2) {
        echo "in";
    } else {
        echo "out";
    }
}else {
    echo "out";
}
?>


<P>List of files:</p>
<UL>
<P><?=$thelist?></p>
</UL>



<?php
//$finfo = finfo_open(FILEINFO_MIME_TYPE); 
//if (finfo_file($finfo, $filename) == "video/x-flv" ){}

$expArr = explode('.', $_FILES["file"]["name"]);
$cnt = count($expArr);
$ext = $arr[$cnt-1]; //flv

    //EXTRACT EXTENSION FROM THE DETAILS ARRAY CREATED BY PATH INFO
    $extension =  $details['extension'];
 
    //PRINT THE EXTENSION OF THE FILE
//    echo($extension);

// Sort in ascending order - this is default
$a = scandir($directory);
if(is_array($a) && count($a)) {
//    echo "isarray";
}
foreach($a as $file) {
    if ($file != '.' && $file != '..') {
//        echo "in";
    } else {
//        echo "out";
    }
}
// Sort in descending order
$b = scandir($directory,1);

//print_r($a);
//print_r($b);


//if($dh = opendir($dir)){
//
//   while(($file=readdir($dh)) !== FALSE){
//      $file = $dir.$file;
//      if(!is_file($file) || substr($file, 0, 1) == '.'){
//         continue;
//      }
//      printf(htmlentities($file));
//   }
//
//   closedir($dh);
//}

//if(is_dir($dirctory)) {
//    
//}
//if($dh = opendir($dirctory)){
//   echo '<select size="4" name="vidfile">';
//   while(($file=readdir($dh)) !== FALSE){
//      $file = $dir.$file;
//      if(!is_file($file) || substr($file, 0, 1) == '.'){
//         continue;
//      }
//      printf('<option>%s</option>', htmlentities($file));
//   }
//   echo '</select>';
//   closedir($dh);
//}
//
//if (!$dh = @opendir($dirctory)) {
//			return;
//		}
//		while (false !== ($obj = readdir($dh))) {
//			if ($obj=='.' || $obj=='..') {
//				echo "<pre>";
//                                print_r($obj);
//                                echo "</pre>";
//			}
//			if (!@unlink($dir.$obj)) {
//				
//			}
//		}
//		closedir($dh);
	

?>