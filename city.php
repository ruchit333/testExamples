<?php
$conn = mysql_connect('localhost', 'root', '');
$db = mysql_select_db('test',$conn);
$state_id = $_REQUEST['state_id'];
$query = "select * from city where state_id = '$state_id'";
$result = mysql_query($query);
$array_city = array();
$cityName = '';
$totalRows = mysql_num_rows($result);
$ddStr = '';
if($totalRows>0){
        $ddStr = "<select onchange='getRegion(this.value,$state_id);'>";
        while ($row = mysql_fetch_array($result)) {
             $ddStr .= "<option value='" . $row['city_id'] . "'>" . $row['city_name'] . "</option>";
        }
        $ddStr .= "</select>";
        echo $ddStr."||||".'city_found';
}else{
    $queryR = "select * from region where state_id = '$state_id'";
    $resultR = mysql_query($queryR);
    $array_region = array();
    while ($row = mysql_fetch_array($resultR)) {
        $ddStr .="<label>'" .$row['region_name']. "'</label>";
    }
    echo $ddStr."||||".'city_not_found';
}
?>