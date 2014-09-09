<?php
//include_once 'connectDB.php';
$conn = mysql_connect('localhost', 'root', '');
$db = mysql_select_db('test',$conn);
$query = "select * from state";
$result = mysql_query($query);
$array_state = array();
while ($row = mysql_fetch_array($result)) {
    $array_state[] = $row;
}

?>
<html>
    <head>
        <title></title>
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/jquery.validate.js"></script>
        <script type="text/javascript">
            function getDropDown(value) {
              
            }
            function getCity(stateId) {
                if(stateId == 0) {
                    document.getElementById('cityDropdown').innerHTML = '<select><option>select</option></select>';
                } else {
                    $.ajax({
                        type: 'post',
                        url: 'city.php',
                        data: 'state_id='+stateId,
                        success: function(response) {
                           resArr = response.split('||||');
                           if(resArr[1] == 'city_found')
                           {
                            document.getElementById('cityDropdown').innerHTML = resArr[0];
                           } else if(resArr[1] == 'city_not_found') {
                             document.getElementById('region').innerHTML = resArr[0];
                            }
                        }
                    });
                }

            }
            
            function getRegion(cityId='',stateId='')
            {
                 if(cityId == 0) {
                    document.getElementById('region').innerHTML = '<label>Select</label>';
                } else {
                    $.ajax({
                        type: 'post',
                        url: 'region.php',
                        data: 'city_id='+cityId+'&state_id='+stateId,
                        success: function(response) {
                            document.getElementById('region').innerHTML = response;
                        }
                    });
                }
            }
            
        </script>
    </head>
    <body>
        <form name="ajaxDemo" metho="post">
            <select onchange="getCity(this.value);">
                <option value="0">Select</option>
                <?php 
                foreach($array_state as $state) { 
                ?>
                    <option value="<?php echo $state['state_id']; ?>"> 
                        <?php echo $state['state_name']; ?></option> 
                <?php
                }
                ?>
            </select>
            <div id="cityDropdown">
                <select>
                    <option value="0">Select</option>
                </select>
            </div>
            
            <div id="region">
                <label> </label>
            </div>
        </form>
    </body>
</html>

