<?php

$dir = "D:\wamp\www\pccc_booker\home_page_video\\";
$videoPlay = "http://localhost/pccc_booker/home_page_video/";
$videoExist = scandir($dir);
$flagExsit = 0;

//Check home_page_video folder contain any video 
$videoArr = array();
$videoName = array();
$videoExt = array();
if (is_array($videoExist) && count($videoExist)) {
   foreach ($videoExist as $video) {
       if ($video != '.' && $video != '..'){
            $videoArr = explode('.',$video);
            $videoCnt = count($videoArr);
            $videoExt []= $videoArr[$videoCnt-1];
          
            $videoName []= $video ;
            $flagExsit = 1;
       } else {
           $flagExsit = 0;
       }
   }
}

//define('GALLERIES_VIDEO_PATH', "http://localhost/vikas_prac/video/");
//$val = "movie.mp4";
//$ext = explode(".",$val);
//$validExt = isset($ext[1]) ? $ext[1] : ''; 
//$path = "http://localhost/vikas_prac/video/movie.mp4";
?>

<video controls style="width:640px;height:360px;" loop="loop">

            <source src="<?php echo $videoPlay.$videoName[0];?>" type='video/<?php echo $videoExt[0]; ?>' />

            <source src="<?php echo $videoPlay.$videoName[1];?>" type='video/<?php echo $videoExt[1]; ?>'  />

</video>