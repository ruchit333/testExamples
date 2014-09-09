<?php
$ipaddr = "117.239.204.146";//$_SERVER['REMOTE_ADDR'];
include_once('simple_html_dom.php');
$urll="http://whoisthisip.com/$ipaddr";
$html = file_get_html("$urll");
$whohtml=array();
$w=0;
foreach($html->find('table tr td') as $element)
{
            $whohtml[$w]=$element->plaintext;
            //echo $element->plaintext."############";
        $w++;
}
$country=str_replace("Country :","","$whohtml[0]");
$country=str_replace("()","","$country");
$state=str_replace("Region :","","$whohtml[1]");
$city=str_replace("City :","","$whohtml[2]");
//$state=trim("Tamil Nadu");
$city=trim($city);

echo "<b>Country :</b> $country <br />";
echo "<b>State :</b> $state<br />";
echo "<b>City :</b> $city <br />";



?>