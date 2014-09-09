<?php
$conn = mysql_connect('localhost', 'root', '');
$db = mysql_select_db('test',$conn);
$state_id = $_REQUEST['state_id'];
$city_id = $_REQUEST['city_id'];
if($city_id == '' || $city_id == 0) {
  echo $query = "select * from region where state_id = ".$state_id;
} else {
    echo $query = "select * from region where state_id = '$state_id' AND city_id=".$city_id;
}


$result = mysql_query($query);
$array_city = array();
$cityName = '';
//$ddStr = "<select>";
while ($row = mysql_fetch_array($result)) {
//     $ddStr .= "<option value='" . $row['region_id'] . "'>" . $row['region_name'] . "</option>";
    $ddStr.="<label>'". $row['region_name'] ."'</label>";
}
//$ddStr .= "</select>";
echo $ddStr;
?>