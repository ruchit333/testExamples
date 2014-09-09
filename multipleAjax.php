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

$getDataQuery = "SELECT * FROM tbl_html_page WHERE html_id=".$_GET['html_id'];
$getDataResult = mysql_query($getDataQuery);
$getDataArr = array();
while ($row = mysql_fetch_assoc($getDataResult)) {
    $getDataArr[] = $row;
}
$pageId = $getDataArr['0']['page_id'];
$subPageId = $getDataArr['0']['sub_page_id'];

$getAllSubPages = "SELECT * FROM tbl_sub_page WHERE page_id=".$pageId;
$getAllSubPagesResult = mysql_query($getAllSubPages);
$getAllSubPagesArr = array();
while ($row = mysql_fetch_assoc($getAllSubPagesResult)) {
    $getAllSubPagesArr[] = $row;
}
//echo "<pre>";
//print_r($getAllSubPagesArr);
//echo "</pre>";
//exit;
?>
<html>
    <head>
        <title></title>
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/jquery.validate.js"></script>
        <script src="js/ckeditore/ckeditor.js"></script>
        <script src="js/ckeditore/adapters/jquery.js"></script>
   
        <link rel="stylesheet" href="js/ckeditore/contents.css">
        <script type="text/javascript">
             $( 'textarea' ).ckeditor( function( textarea ) {
                // Callback function code.
              } )
            function getDropDown(value) {
              
            }
            function getSubPage(pageId) {
                if(pageId == 0) {
                    document.getElementById('subPageDropdown').innerHTML = '<select><option>select</option></select>';
                } else {
                    document.getElementById('htmlDescription').innerHTML = '';
                    $.ajax({
                        type: 'post',
                        url: 'subPageAjax.php',
                        data: 'page_id='+pageId,
                        success: function(response) {
                           resArr = response.split('||||');
                           if(resArr[1] == 'city_found')
                           {
                            document.getElementById('subPageDropdown').innerHTML = resArr[0];
                            getRegion($('#subPageDropdown select').val(),pageId);
                           } else if(resArr[1] == 'city_not_found') {
                                document.getElementById('subPageDropdown').innerHTML = '<select><option>select</option></select>';
      
                                document.getElementById('htmlDescription').innerHTML = resArr[0];
                                
                                //$('#htmlDescription').children('iframe').html(resArr[0]);
                            }
                        }
                    });
                }

            }
            
            function getRegion(subPageId='',pageId='')
            {
                 if(subPageId == 0) {
                    document.getElementById('htmlDescription').innerHTML = '<textarea>Select</textarea>';
                } else {
                    $.ajax({
                        type: 'post',
                        url: 'htmlPageAjax.php',
                        data: 'sub_page_id='+subPageId+'&page_id='+pageId,
                        success: function(response) {
//                            alert($('#cke_editor1').children('.cke_browser_gecko cke_browser_quirks').html());
                            if(response != '') {
//                                document.getElementById('addother').innerHTML = $('#cke_editor1').html();
                                document.getElementById('htmlDescription').innerHTML = response;
                            } else {
                            
                                document.getElementById('htmlDescription').innerHTML = '';
                            }
                        }
                    });
                }
            }
            
        </script>
    </head>
    <body>
        <form name="ajaxDemo" metho="post">
            <select onchange="getSubPage(this.value);">
                <option value="0">Select</option>
                <?php 
                foreach($array_page as $page) { 
                ?>
                    <option value="<?php echo $page['page_id']; ?>" <?php if($pageId==$page['page_id']){ echo 'selected="selected"';}  ?>> 
                        <?php echo $page['page_title']; ?></option> 
                <?php
                }
                ?>
            </select>
            <div id="subPageDropdown">
                <select onchange='getRegion(this.value,<?php echo $pageId;?>);'>
                    <?php 
                        foreach($getAllSubPagesArr as $subpage) { 
                        ?>
                            <option value="<?php echo $subpage['sub_page_id']; ?>" <?php if($subPageId==$subpage['sub_page_id']){ echo 'selected="selected"';}  ?>> 
                                <?php echo $subpage['sub_page_title']; ?></option> 
                        <?php
                        }
                        ?>
                </select>
            </div>
            
            <div id="htmlDescription">
<!--                <textarea class="ckeditor" name="editor1" id="editor1"><?php //echo $getDataArr['0']['html_description'];?></textarea>-->
                <textarea><?php echo $getDataArr['0']['html_description'];?></textarea>
            </div>
            
            <div id="addother">
                
            </div>
        </form>
    </body>
</html>

