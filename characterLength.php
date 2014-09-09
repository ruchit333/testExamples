<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script>
    function textCounter(field,field2,maxlimit)
    {
     var countfield = document.getElementById(field2);
     if (field.value.length > maxlimit ) {
      field.value = field.value.substring( 0, maxlimit );
      document.getElementById("error").style.display = "block";
      return false;
     } else {
      countfield.value = maxlimit - field.value.length;
       document.getElementById('error').style.display = "none";
     }
    }
</script>
</head>
    <body>
<title>Untitled Document</title>
<?php
$maxLimit = 10;
?>
<input disabled  maxlength="3" size="3" value="10" id="counter" />
<textarea onkeyup="textCounter(this,'counter',<?php echo $maxLimit; ?>);" id="message" />
<span id="error" style="display:none;">Not more than 10 characters</span>
    </body>
</html>