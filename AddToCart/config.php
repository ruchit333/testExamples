<?php
/**
 * Add to cart config file
 *
 * @author Ruchit Patel
 * @since 6th Feb, 2014
 *
 * @copyright (c)2014.
*/	

$currency = '$'; //Currency sumbol or code

$db_username = 'root';
$db_password = '';
$db_name = 'test_store';
$db_host = 'localhost';
$mysqli = new mysqli($db_host, $db_username, $db_password,$db_name);
$PayPalMode 			= 'sandbox'; // sandbox or live
$PayPalApiUsername 		= 'paypalusername@domain.com'; //PayPal API Username
$PayPalApiPassword 		= '2934739247ew'; //Paypal API password
$PayPalApiSignature 	= '92837938wedsr32dfdsfwerew'; //Paypal API Signature
$PayPalCurrencyCode 	= 'USD'; //Paypal Currency Code
$PayPalReturnURL 		= 'http://localhost/shopping-cart/paypal-express-checkout/process.php'; //Point to process.php page
$PayPalCancelURL 		= 'http://localhost/shopping-cart/cancel_url.php'; //Cancel URL if user clicks cancel
?>