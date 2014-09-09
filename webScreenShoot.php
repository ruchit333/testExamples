
<?php


 
require_once('Knplabs/Snappy/Media.php');
require_once('Knplabs/Snappy/Image.php');
//include("php/lib/GrabzItClient.class.php");
//
//$grabzIt = new GrabzItClient("MjMxZjE0OTRlYmJlNDQ1NWFkNTNlZDFmYmYyYTVmNDM=", "Pz96Fz8/XT8/P2FMRD8/PzBJFXc/PxA/ID8hST8/Qho=");
//$id = $grabzIt->TakePicture("http://www.google.com");
//
////wait a certain amount of time
//
//$result = $grabzIt->GetPicture($id);
//$grabzIt->SetImageOptions("http://www.prepaymania.co.uk", null, null, null,-1,-1);
//$filepath = "d:/wamp/www/test/images/test.jpg";
//$grabzIt->SaveTo($filepath);
//if (!$result)
//{
//return;
//}
//
//file_put_contents("d:/wamp/www/test/images");



 
/* Tested on Ubuntu 10.0.4, requires PHP 5.3  */
 

 
$options = array('zoom' => 0.5, 'no-images' => true);
 
/* 'wkhtmltoimage' executable  is located in the current directory */
$snap = new Image('./wkhtmltoimage-i386',$options);
 
/* Displays the bbc.com website index page screen-shot in the browser */
header("Content-Type: images/jpeg");
$snap->output('http://www.bbc.com');
 

?>