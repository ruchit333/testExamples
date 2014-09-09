<?php
## define your url
## change comments tags to the proper syntax as recommended by php.net.
## unless you are a developer, you can give reason why these ## are valid.
## even if the rest of the world would argue that it is wrong,
## it does not mean it is not valid.
//$url = "http://www.daniweb.com/web-development/php/threads/256243";
//$url = "http://www.daniweb.com/web-development/php/threads/256243";
//echo '<img src="http://open.thumbshots.org/image.aspx?url='.$url.'" width = "150" height = "150" />';


$html = file_get_contents('http://www.ljinstitutes.org');
//$html = file_get_contents('http://localhost/ppm1.0');

//$html = file_get_contents('http://localhost/test/linkPage.html');
$dom = new DOMDocument();
@$dom->loadHTML($html);

// grab all the on the page
$xpath = new DOMXPath($dom);
$hrefs = $xpath->evaluate("/html/body//a");
$linkCount = 0;
$url = array();
for ($i = 0; $i < $hrefs->length; $i++) {
    $href = $hrefs->item($i);
    $url[] = $href->getAttribute('href');
    //       echo $url.'<br />';
    global $linkCount;
    $linkCount++;
}

$urlMatch = '';
$harmString = '';
$harmCount = 0;
foreach ($url as $newUrl) {
    //  $urlMatch .= $newUrl;
    echo $newUrl."<br />";
    $pattern = '/porn/';
    $findHarmWord = preg_match($pattern, $newUrl, $matches); 
    
    if ($findHarmWord > 0) {
        $arrUrl = array();
        $arrUrl[] = $newUrl."<br/>";
        foreach ($arrUrl as $harm) {
     //     echo "harm Url".$harm;
            global $harmCount;
            $harmString .=$harm;
            $harmCount++;
        }
    }
}

echo "<b>Total Number of link</b> =>" . $linkCount . "<br />";

if ($harmCount > 0) {
    echo "Harm Url =><br/><b> " . $harmString . " </b><br/>";
    echo "Total Harm link=> " . $harmCount . "<br />";
}  else {
    echo '<b>Harm url not found</b>';
}

?>
