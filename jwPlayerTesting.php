<script type="text/javascript" src="jwplayer/jwplayer.js"></script>
<script type="text/javascript">jwplayer.key="nbOZtg0aroKWaJnwNfolrM4O+LbrCkIafPNdeA==";</script>
<div id="myElement">Loading the player...</div>
<?php
$dir = "D:\wamp\www\pccc_booker\home_page_video\\";
$videoPlay = "http://localhost/pccc_booker/home_page_video/";
$videoExist = scandir($dir);
$flagExsit = 0;

//Check home_page_video folder contain any video 
if (is_array($videoExist) && count($videoExist)) {
   foreach ($videoExist as $video) {
      
       if ($video != '.' && $video != '..'){
            echo $video;
           $flagExsit = 1;
       } else {
           $flagExsit = 0;
       }
   }
}

$pathVideo = $videoPlay.$video;
echo $pathVideo;
?>
<script type="text/javascript">
   
//    var path = '<?php //echo "http://localhost/test/jwplayer/2_in_1_out.flv";?>';
    var path = '<?php echo $pathVideo;?>';
//    alert(path);
        jwplayer("myElement").setup({
        file: path,
        logoHide: false,
        image: "http://localhost/test/images/3.jpg"
    });
</script>