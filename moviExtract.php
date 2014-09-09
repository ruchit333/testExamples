<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$ffmpegpath = 'ffmpeg.exe';
$convertFile = "movieStock/The.Hangover.Part.III.mkv";
$ConvertTo = "movieStock/The.Hangover.Part.III.mp4";
$command = "ffmpeg -i $convertFile -ar 22050 $ConvertTo";
//$command = "$ffmpegpath -i $convertFile -s 480x320 -vcodec mpeg4 -acodec aac -strict experimental -ac 1 -ar 16000 -r 13 -ab 32000 -aspect 3:2 $ConvertTo";
echo $command;

@exec($command);

?>