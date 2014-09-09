<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<!--<script language="javascript">
function imgdisp()
{
document.getElementById("img1").src=document.getElementById_("File1").value;
}
function disp1()
{
document.getElementById("img1").style.width="";
document.getElementById("img1").style.width="";
        var newImg = new Image();
        newImg.src = document.getElementById("File1").value;
        var height = newImg.height;
        var width = newImg.width;
        if (width>500)
        {
        document.getElementById("img1").style.width=500;
        }
        }
        </script>
        <INPUT onpropertychange="imgdisp()" style="Z-INDEX: 101; LEFT: 160px; POSITION: absolute; TOP: 104px"
                type="file" id="File1" runat="server">
        

                    <IMG onresize="disp1()"  style="Z-INDEX: 102; LEFT: 40px; POSITION: absolute; TOP: 160px"
                    alt="" src="" id="img1">-->


<html>
<head>
<script type="text/javascript" language="javascript">
function getImageSize() {
var height = document.getElementById("imageUpload").height;
var width = document.getElementById("imageUpload").width;
alert("Height is " + height + ", width is " + width + ".");
if (confirm("Change image size?")) {
var newheight = prompt("Enter a height.");
var newwidth = prompt("Enter a width.");
document.getElementById("foot").height = "" + newheight + "";
document.getElementById("foot").width = "" + newwidth + "";
}
else {
alert("Okay, fine, I wont change it.");
}
}
</script>
</head>
<body>
    <form>
        <input type="file" id="imageUpload" name="imageUpload"/>
        <input type="submit" name="submit" onclick="getImageSize()">
    </form>
<!--<img src="http://www.webdeveloper.com/forum/images/webdev-logo2.gif" id="foot" onClick="getImageSize()">-->
</body>
</html>
