
<?php
$conn = mysql_connect('localhost', 'root', '');
$db = mysql_select_db('test',$conn);
$page_id = $_REQUEST['page_id'];
$sub_page_id = $_REQUEST['sub_page_id'];
if($sub_page_id == '' || $sub_page_id == 0) {
    $query = "select * from tbl_html_page where page_id = ".$page_id;
} else {
   $query = "select * from tbl_html_page where page_id = '$page_id' AND sub_page_id=".$sub_page_id;
}


$result = mysql_query($query);
$array_city = array();
$cityName = '';
//$ddStr = "<select>";
$ddStr = '';
while ($row = mysql_fetch_array($result)) {
//     $ddStr .= "<option value='" . $row['region_id'] . "'>" . $row['region_name'] . "</option>";
    $ddStr.="<textarea>". $row['html_description'] ."</textarea>";
}
//$ddStr .= "</select>";
echo $ddStr;
?>