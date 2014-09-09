 <?php
error_reporting(E_ALL);
ini_set("display_errors", "on");
ini_set("ffmpeg.allow_persistent", 1);

//$path = "http://localhost/vikas_prac/video/movie.mp4";
//$absolute_path = "D:/wamp/www/vikas_prac/video";


$uploadfile     = "D:/wamp/www/pccc_booker/home_page_video/dhone_jadeja.flv";
$save_thumbnail_to_with_file_name  =  "D:/wamp/www/pccc_booker/home_page_video/dhone_jadeja.mp4";

//@exec("ffmpeg -i $uploadfile -an -y -f mjpeg -ss 00:00:01 -vframes 1 $save_thumbnail_to_with_file_name");
echo "ffmpeg -i $uploadfile -ar 22050 $save_thumbnail_to_with_file_name";
var_dump(exec("ffmpeg -i $uploadfile -ar 22050 $save_thumbnail_to_with_file_name"));
?>