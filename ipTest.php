<?php
    function ip_details($ip)
    {
        $json = file_get_contents("http://ipinfo.io/{$ip}");
        $details = json_decode($json);
        return $details;
    }

//    $details = ip_details("141.92.131.10");
    $details = ip_details("95.92.252.80");
    echo "City :- ".$details->city."</br>";     // => Mountain View
    echo "Country :- ".$details->country."</br>";  // => US
    echo "Org :- ".$details->org."</br>";      // => AS15169 Google Inc.
    echo "Host Name :- ".$details->hostname."</br>";
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <?php
         if ($details->country == 'ES') 
         {
             echo "You are in SPAIN";
         } else {
             echo "OUT OF SPAIN";
         }

        ?>
<!--<script type="text/javascript">

var eliteSpanishUrl = 'http://store.elitemobile.es';

var answer = confirm ("You appear to be visiting this website from Espania, Would you like to be redirected to our Espania site?")
if (answer)
window.location = eliteSpanishUrl;
else
alert ("Darn. Well, keep trying then.")

// 
</script> -->
    </head>
    <body>
        
       <?php

//$ip_address=$_SERVER['REMOTE_ADDR'];
//
///*Get user ip address details with geoplugin.net*/
//$geopluginURL = 'http://www.geoplugin.net/php.gp?ip='.$ip_address;
//$addrDetailsArr = unserialize(file_get_contents($geopluginURL)); 
//
///*Get City name by return array*/
//$city = $addrDetailsArr['geoplugin_city']; 
//
///*Get Country name by return array*/
//$country = $addrDetailsArr['geoplugin_countryName'];
//
///*Comment out these line to see all the posible details*/
///*echo '<pre>';
//print_r($addrDetailsArr);
//die();*/
//
//if(!$city){
//   $city='Not Define';
//}if(!$country){
//   $country='Not Define';
//}
//echo '<strong>IP Address</strong>:- '.$ip_address.'<br/>';
//echo '<strong>City</strong>:- '.$city.'<br/>';
//echo '<strong>Country</strong>:- '.$country.'<br/>';


//function to find country and city from IP address

//function ipToCountry($ip){
//	$info = file_get_contents("http://who.is/whois-ip/ip-address/$ip");
//	list($a, $b) = explode('country:        ', $info);
//	return	substr($b,0,2);
//}
//echo "Your IP: ".$_SERVER['REMOTE_ADDR']."<br>";
//echo 'Country: ' .ipToCountry('117.239.204.146');
//
//
//$tags = get_meta_tags('http://www.geobytes.com/IpLocator.htm?GetLocation&template=php3.txt&IpAddress=117.239.204.146');
//print $tags['country']
       ?>
    </body>
</html>
