<?php
$dir = "D:\wamp\www\pccc_booker\home_page_video\\";
$videoPlay = "http://localhost/pccc_booker/home_page_video/";
$videoExist = scandir($dir);
$flagExsit = 0;
$videoName = array();
$videoExt = array();
//Check home_page_video folder contain any video 
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

//$pathVideo = $videoPlay.$video;
//echo $pathVideo;
?>
<html>
<head>
  <title>Video.js | HTML5 Video Player</title>

  <!-- Chang URLs to wherever Video.js files will be hosted -->
  <link href="videoJs/video-js.css" rel="stylesheet" type="text/css">
  <!-- video.js must be in the <head> for older IEs to work. -->
  <script src="videoJs/video.js"></script>

  <!-- Unless using the CDN hosted version, update the URL to the Flash SWF -->
  <script language="javascript">
    videojs.options.flash.swf = "videoJs/video-js.swf";
  </script>


</head>
    <body>

      <video id="example_video_1" class="video-js vjs-default-skin" controls width="640" height="264"
          poster="<?php echo $videoPlay.$videoName[1];?>"
          data-setup="{}" onplay="test();"> 
          
          <!--$videoName[1], $videoExt[1] -- 'jpg' image-->
          <!--$videoName[0], $videoExt[0] -- 'flv' video & $videoName[2],$videoExt[2]; -- 'mp4' video-->
        <source src="<?php echo $videoPlay.$videoName[0];?>" type='video/<?php echo $videoExt[0]; ?>' />
        <source src="<?php echo $videoPlay.$videoName[2];?>" type='video/<?php echo $videoExt[2]; ?>' />
      </video>
        
    </body>
</html>