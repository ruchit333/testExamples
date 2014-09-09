<?php
$conn = mysql_connect('localhost', 'root', '');
$db = mysql_select_db('test',$conn);
//$page_id = $_REQUEST['page_id'];
$query = "select * from tbl_html_page";
$result = mysql_query($query);
$array_html = array();
$cityName = '';
while($row = mysql_fetch_array($result))
{
    $array_html[] = $row;
    
}
?>
<table>
    <tr>
        <td>
            Html Id
        </td>
    </tr>
<?php
foreach ($array_html as $html) {
    echo "<tr><td><a href='multipleAjax.php?html_id=".$html['html_id']."'>".$html['html_id'] ."</td></tr>";
}
?>
</table>