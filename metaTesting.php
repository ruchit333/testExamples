<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
<!--        <meta http-equiv="refresh" content="10" />-->
        <title></title>
        <script type="text/javascript" src="jquery-1.8.0.js"></script>
        <script type="text/javascript">
            function refreshByTenSec(){
                $.ajax({
                  url: 'metaTesting.php',
                  type:"POST",
                  data:"dataPost", 
                  success: function(data){
                  document.getElementById("dataPost").innerHTML = data;
           
                    //render the dynamic data into html
                  }
                });
            }
            setInterval(refreshByTenSec, 10000);
            </script>
    </head>
    <div id="dataPost">
    <?php
    
//    if($_POST['is_ajax'] = 1){
        $conn = mysql_connect('localhost','root','');
        $db = mysql_select_db('test',$conn);
        $query = "select * from users";
        $result = mysql_query($query);

        while($row = mysql_fetch_array($result))
        {
            echo $row['first_name']."<br/>";
        }
//    }
    ?>
    </div>    
</html>
