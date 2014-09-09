<?php
$ffmpegpath = "ffmpeg.exe";
$input = 'videoJs/bunny.flv';
$output = 'videoJs/wattan.mp4';

//if (make_jpg($input, $output)){
//echo 'success';
//}else{
//echo 'bah!';
//}
//
//function make_jpg($input, $output, $fromdurasec="01") {
//global $ffmpegpath;
//
//if(!file_exists($input)) return false;
//$command = "$ffmpegpath -i $input -an -ss 00:00:$fromdurasec -r 1 -vframes 1 -f mjpeg -y $output";
//
//@exec( $command, $ret );
//if(!file_exists($output)) return false;
//if(filesize($output)==0) return false;
//return true;
if (make_video($input, $output)){
echo 'success';
}else{
echo 'bah!';
}

function make_video($input, $output) {
global $ffmpegpath;

if(!file_exists($input)) return false;
//ffmpeg -i bunny.flv -ar 22050 vikas.mp4
$command = "$ffmpegpath -i $input -ar 22050  $output";

@exec( $command, $ret );
if(!file_exists($output)) return false;
if(filesize($output)==0) return false;
return true;
}
?>