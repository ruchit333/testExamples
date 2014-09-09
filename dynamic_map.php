<?php
$conn = mysql_connect('localhost','root','');
$db = mysql_select_db('test',$conn);
$query = "SELECT * FROM tbl_google_map";
$result = mysql_query($query);
$googleMapArray = array();

while($row = mysql_fetch_array($result)) {
	
//   $googleMapArray[$i]['title'] = $row['title'];
//   $googleMapArray[$i]['longitude'] = $row['longitude'];
//   $googleMapArray[$i]['latitude'] = $row['latitude'];
   
    $googleMapArray[] = $row['title']. "," . $row['longitude']. "," .$row['latitude'];
    $googleId[] = $row['id'];
    $googleTitle = $row['title'];
    $googleLongitude = $row['longitude'];
    $googleLatitude = $row['latitude'];
}

?>
<?php 

echo "<pre>";
print_r($googleId);
echo "</pre>"; 

?>


<html> 
<head> 
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" /> 
  <title>Google Maps Multiple Markers</title> 
<!--  <script src="http://maps.googleapis.com/maps/api/js?sensor=false" 
          type="text/javascript"></script>-->
</head> 
<body>
  <div id="map" style="width: 100%; height: 100%;"></div>
  <script type="text/javascript" language ="javascript">
    alert("asdf");
    var id = '<?php echo count($googleId);?>';
    alert(id);
        var marker1 = '<?php echo $googleId; ?>', i;

        for (i = 0; i < marker1.length; i++) {
            alert(i);
    }
      
  </script>
 <script type="text/javascript" language = "javascript" >
//    var locations = [
//      ['Ruchit Patel,Ahmedabad, Gujarat, India', 23.023099,72.556708,2],
//      ['Coogee Beach', -33.923036, 151.259052, 5],
//      ['Cronulla Beach', -34.028249, 151.157507, 3],
//      ['Manly Beach', -33.80010128657071, 151.28747820854187, 2],
//      ['Maroubra Beach', -33.950198, 151.259302, 1]
//    ];


    
    
    
  </script>
</body>
</html>