
<?php
if (isset($_POST['url'])){
    $url = $_POST['url'];
    
$urlcheck = parse_url($url);
if(in_array("http://", $urlcheck) || in_array("https://", $urlcheck)) {
    echo "in";
} 
//   $exp = explode("://",$url);
//  
//   $cnt = count($exp);
//   $wwwUrl = $exp[$cnt-1];
//   $http = $exp[0];
//   echo $exp[1];
//   echo $youtubeUrl = "https://".$exp[1];
//   $strReplace = str_replace('https://','', $url);
//   echo $strReplace;
   
//   $http = $exp[0];
//   echo $http
   
//  if($http == 'http' || $http == 'https') {
//      echo "found";
//  } else {
//      echo "dont found";
//  }
}

$youtubePattern = "/^.*((youtu.be\/)|(v\/)|(\/u\/\w\/)|(embed\/))\??v?=?([^#\&\?]*).*/";
$url = "https://www.youtube.com/embed/spmyBUNbDdQ?feature=player_detailpage";
if(preg_match($youtubePattern,$url)) {
    echo "<br/> match";
} else {
    echo "sorry";
}



?>

<html>

<body>

<iframe id="ytplayer" width="640" height="360"
        src="<?php echo $youtubeUrl;?>"
        frameborder="0" allowfullscreen>
</iframe>
<form name="youtube" id="youtube" action="" method="post">
    <input type="text" name="url" id="url" />
    <input type="submit" name="submit" value="submit"/>
</form>
</body>
</html>
