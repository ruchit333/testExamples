<?php
    include("geoiploc.php");
//    $ip = '62.82.84.1'; 
    $ip = '212.183.140.49'; 
    echo "Your IP Address is: " . $ip . "<br />"; 
    echo "Your Country is: ";
    echo getCountryFromIP($ip);
    echo "<br />\n";
    echo "Your Country Name is: ";
    echo getCountryFromIP($ip, " NamE ")."<br/>";
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
       <?php
        if (getCountryFromIP($ip) == 'ES') 
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
        
    </body>
</html>