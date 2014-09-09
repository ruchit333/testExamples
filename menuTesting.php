
<html>
<head>
<title>Example of HTML Menu</title>
<style type="text/css" media="screen">
#horizontalmenu ul {
	padding: 1;
	margin: 1;
	list-style: none;
}
#horizontalmenu li {
	float: left;
	position: relative;
	padding-right: 100;
	display: block;
	border: 4px solid #CC55FF;
	border-style: inset;
}
#horizontalmenu li ul {
	display: none;
	position: absolute;
}
#horizontalmenu li:hover ul {
	display: block;
	background: red;
	height: auto;
	width: 8em;
}
#horizontalmenu li ul li {
	clear: both;
	border-style: none;
}
</style>
</head>
<body>
<div id="horizontalmenu">
    <?php
//include_once 'connectDB.php';
$conn = mysql_connect('localhost', 'root', '');
$db = mysql_select_db('test',$conn);
$query = "select * from tbl_page";
$result = mysql_query($query);
$array_page = array();

while ($row = mysql_fetch_array($result)) {
    $array_page[] = $row;

    
}

$querySub = "SELECT * FROM tbl_page WHERE page_id IN (SELECT page_id FROM tbl_sub_page WHERE page_id != '')";
$resultSub = mysql_query($querySub);
$array_pageSub = array();

while ($rowSub = mysql_fetch_array($resultSub)) {
    $array_pageSub[] = $rowSub; 
}
?>
  <ul>
      <?php
        foreach ($array_page as $page) {
                $color ='';
            foreach ($array_pageSub as $pagesub) {
                if (!empty($pagesub['page_id']) && ($page['page_id'] == $pagesub['page_id'] )) {
                    $color = 'style = "background-color: red"';
                }

            }
      ?>
    <li <?php echo $color; ?>><a href="#"><?php echo $page['page_title'];?></a>
                <ul>
        <?php 
        $query1 = "select * from tbl_sub_page WHERE page_id =".$page['page_id'];
        $result1 = mysql_query($query1);
        $array_sub_page = array();
        while ($row1 = mysql_fetch_array($result1)) {
            $array_sub_page[] = $row1;
        }
        
        foreach ($array_sub_page as $subpage) {

        ?>
        <li>
            <a href="#"><?php echo $subpage['sub_page_title'];?></a>
        </li>

         <?php 
        }
        ?>
        </ul>
       </li>
        <?php }
        ?>

  </ul>
</div>
</body>
</html>

