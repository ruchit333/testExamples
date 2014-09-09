<?php
$destination_dir = "D:/wamp/www/test/path2/thankyou.png"; //path of the destination directory
$source_dir = "D:/wamp/www/test/path1/thankyou.png"; //path of the source directory
 
//Building the full path for both source and destination images
$source_img_path = $source_dir;
$destination_img_path = $destination_dir;
 
//Now copying the image to the destination directory
copy($source_img_path,$destination_img_path); 



?>
