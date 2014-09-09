<html>
    <head>
        <title>
        </title>
        <script type="text/javascript" src="js/nicEdit.js"></script>
        <script type="text/javascript">
            bkLib.onDomLoaded(function() {
//           new nicEditor().panelInstance('htmlText');

           new nicEditor({fullPanel : true}).panelInstance('htmlText');
           new nicEditor({iconsPath : '../images/nicEditorIcons.gif'}).panelInstance('area3');
           new nicEditor({buttonList : ['fontSize','bold','italic','underline','strikeThrough','subscript','superscript','html','image']}).panelInstance('htmlText');
//           new nicEditor({maxHeight : 100}).panelInstance('htmlText');
           });
        </script>
    </head>
    <body>
        <form name="editorTesting" id="editortesting" method="post" >
            <table>
                <tr>
                    <td>
                        HTML EDITOR
                    </td>
                    <td>
                        <textarea id="htmlText" name="htmlText" cols="60" >
                            <?php
                            session_Start();
                            if (isset($_POST['submit'])) {
                                echo $_POST['htmlText'];
                                $_SESSION['htmlText'] = $_POST['htmlText'];
                        }
                            ?>
                        </textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="submit" value="submit"/>
                    </td>
                </tr>
                <tr>
                    <?php
                        $style = " style='display:none'";
                        if (isset($_POST['submit'])) {
                            $style = " style='display:block'";
                        }
                    ?>
                    <td id="displayLink" <?php echo $style; ?>>

                    </td>
                </tr>
            </table>
        </form>
        
        <script language="javascript" type="text/javascript">
            var htmlLink = "hello";
            if (document.getElementById("displayLink")) {
                var url = "http://localhost/test/editorValue.php";
                var data = '<a href="javascript:void(0);" onclick="javascript: window.open(\''+ url +'\',\'_blank\',\'width=700,height=500toolbar=0,menubar=0,location=0,status=0,scrollbars=1,resizable=0,left=0,top=0\'); return false;"><font color=\'#10499E\'>Click here</font></a> to check how theme would look like!';
                document.getElementById("displayLink").innerHTML = data;
            }
            
           
        </script>
    </body>
</html>
<?php
//if (isset($_POST['submit'])) {
//    $html = $_POST['htmlText'];
//}
?>
