<?php
$conn = mysql_connect('localhost', 'root', '');
$db = mysql_select_db('test',$conn);
$query = "select * from state";
$result = mysql_query($query);
$array_state = array();
while ($row = mysql_fetch_array($result)) {
    $array_state[] = $row;
}

?>
<script type="text/javascript">
    function getRegion(id)
    {
        var frm = document.selectThree;
        var id = id;
        count();
        var getId = id.split('_');
        if(getId.length == 2) {
           frm.action = 'threeTesting.php?cityId=' + getId[1]; 
        } else {
            frm.action = 'threeTesting.php?stateId=' + id;
        }
        
        
        frm.submit();
    }
    
    function count()
    {

    }
</script>

<form name="selectThree" id="selectThree"  method="POST">
<select name="three" onchange="getRegion(this.value);">
    <option value="0">
        select
    </option>
    
<?php

foreach($array_state as $state) {
    $citySelect = "select * from city where state_id=".$state['state_id'];
    $result1 = mysql_query($citySelect);
    $array_city = array();
    while ($row1 = mysql_fetch_array($result1)) {
        $array_city[] = $row1;
    }
    $selected = '';
//        $html .= $state['state_name']."</br>";
        if ($_GET['stateId'] == $state['state_id']) {
           $selected = " selected='selected'"; 
        }
        
//        $stateid[] = $state['state_id'];
        $option .= "<option value='".$state['state_id']."' ". $selected. ">".$state['state_name']."</option>";
    foreach($array_city as $city) {
       if($city['state_id'] == $state['state_id']){
           $html .=  "------".$city['city_name']."</br>";
           $Selected = '';
           if ($_GET['cityId'] == $city['city_id']) {
               $Selected = " selected='selected'";
           }
           $option .= "<option value='".$city['state_id']."_".$city['city_id']."'". $Selected .">"."|__".$city['city_name']."</option>";
           $cityId[] = $city['state_id']."_".$city['city_id'];
       } 
    }
}

echo $option;

?>

</select>
    
</form>


<?php

if(isset($_REQUEST['stateId']) && $_REQUEST['stateId'] != '') {
    echo "state_Id".$_REQUEST['stateId'];
}

if(isset($_REQUEST['cityId']) && $_REQUEST['cityId'] != '') {
    echo "city_Id".$_REQUEST['cityId'];
}
?>