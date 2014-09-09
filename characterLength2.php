<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script>
function textCounter(field,field2,maxlimit) {
var textMessage = field.value;
var abused = "fuck";
var string = ereg_replace(abused,' ',textMessage);
alert(string);
var countfield = document.getElementById(field2);


	if ( field.value.length > maxlimit ) {
		field.value = field.value.substring( 0, maxlimit );
		return false;
	} else {
		countfield.innerHTML = maxlimit - field.value.length;
		//countfield.value = maxlimit - field.value.length;
	}
}
</script>

<title>Untitled Document</title>
</head>
<?php 
$maxLimit = 10;
?>
<span>Remaining Character : </span>
<span id="counter"><?php echo $maxLimit; ?></span>
<!--<input disabled  maxlength="3" size="3" value="10" id="counter">-->
<textarea onkeyup="textCounter(this,'counter','<?php echo $maxLimit; ?>');" id="message">
</textarea>
