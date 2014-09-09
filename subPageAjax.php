

<?php
$conn = mysql_connect('localhost', 'root', '');
$db = mysql_select_db('test',$conn);
$page_id = $_REQUEST['page_id'];
$query = "select * from tbl_sub_page where page_id = '$page_id'";
$result = mysql_query($query);
$array_city = array();
$cityName = '';
$totalRows = mysql_num_rows($result);
$ddStr = '';


if ($totalRows>0) {
    $flageSubId =0;
        $ddStr = "<select onchange='getRegion(this.value,$page_id);'>";
        while ($row = mysql_fetch_array($result)) {
            if($row['sub_page_id'] != '') {
                $flageSubId = 1;
            }
             $ddStr .= "<option value='" . $row['sub_page_id'] . "'>" . $row['sub_page_title'] . "</option>";
        }
        $ddStr .= "</select>";

//        if($flageSubId == 1) {
//        $subQuery = "select sub_page_id from tbl_sub_page where page_id = ".$page_id. ' LIMIT 1';
//        $subResult = mysql_query($subQuery);
//        $row = mysql_fetch_array($subResult);
//        $subId = $row['sub_page_id'];
//        $htmlquery = "select * from tbl_html_page where page_id = ".$page_id. " AND sub_page_id=".$subId;
//        $subResult = mysql_query($htmlquery);
//        
//        while ($row = mysql_fetch_array($subResult)) {
////            $ddStr .="<label>'" .$row['html_description']. "'</label>";
//        }
//        }
        echo $ddStr."||||".'city_found';
}else{
    $queryR = "select * from tbl_html_page where page_id = '$page_id'";
    $resultR = mysql_query($queryR);
    $array_region = array();
    while ($row = mysql_fetch_array($resultR)) {
        $ddStr .="<textarea>" .$row['html_description']. "</textarea>";
//        $ddStr .= $row['html_description'];
        
    }
    echo $ddStr."||||".'city_not_found';
}

?>