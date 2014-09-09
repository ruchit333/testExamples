<?php

$uploadfile     = "D:/wamp/www/test/videoJs/bunny.mp4";
$save_thumbnail_to_with_file_name  =  "D:/wamp/www/test/videoJs/bunny.jpeg";

@exec("ffmpeg -i D:\wamp\www\test\videoJs\bunny.flv -s 480x320 -vcodec mpeg4 -acodec aac -strict experimental -ac 1 -ar 16000 -r 13 -ab 32000 -aspect 3:2 d:\wamp\www\test\videoJs\bunny.flv1.mp4");
?>
