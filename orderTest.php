<?php
ob_start();
error_reporting(E_ALL);
ini_set("display_errors", "on");

#define("ACCESS_TOKEN", "sa=8307.f56b9.bx%252fPuHfgRNabez5wGaavx8iwhjrZVGL%252b7q3dv2%252bL9ek%253d");
define("ACCESS_TOKEN", "sa=4f32e6.f4350.cGX%252fBPYMMd06quaKN%252bV1E%252bgAXRwVjbyzhVGxlSv%252b9EI%253d");

//$apiURL = "https://212.140.192.161:443/product/inductproducts?accesstoken=" . ACCESS_TOKEN;
//$startDateTime = "2014-04-01T11:29:50+01:00";
//$endDateTime = "2014-04-20T11:29:50+01:00";
$startDateTime = "2014-04-01";
$endDateTime = "2014-04-20";

$orderApiURL = "https://212.140.192.161:443/orders/retrieveorders?accesstoken=" . ACCESS_TOKEN."&status=released&startdatetime=$startDateTime&enddatetime=$endDateTime";

$headers = array('Accept: application/xml', 'Content-Type: text/plain', 'Authorization: accesstoken=' . ACCESS_TOKEN);
		
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $orderApiURL);
curl_setopt($ch, CURLOPT_PORT, 443);
curl_setopt($ch, CURLOPT_HEADER, 1);
#curl_setopt($ch, CURLINFO_HEADER_OUT, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_HTTPGET, 1);
//curl_setopt($ch, CURLOPT_POST, 1);
//curl_setopt($ch, CURLOPT_POSTFIELDS, $request);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
//curl_setopt($ch, CURLOPT_FRESH_CONNECT, 1);
#curl_setopt($ch, CURLOPT_VERBOSE, 0);
$response = curl_exec($ch);

#Check if any error occurred
if(!curl_errno($ch)){
	$info = curl_getinfo($ch);
	echo 'Took ' . $info['total_time'] . ' seconds to send a request to ' . $info['url'] . "<br/><br/>";
}else {
	$info = curl_getinfo($ch);
	echo "Success" . "<br/><br/>";
}

curl_close($ch);

echo "<b>API URL</b><br/>" . $orderApiURL . "<br/><br/>";
echo "<pre>";
echo "<b>HEADERS<b><br/>";
print_r($headers);
echo "<b>INFORMATION PASSED<b><br/>";
print_r($info);
echo "<b>RESPONSE<b><br/>";
print_r($response);
echo "</pre>";

exit;
?>