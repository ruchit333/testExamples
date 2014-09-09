<!--<input type="file" name="photo" id="photoInput" />
<script type="text/javascript">
var _URL = window.URL;
alert("hello");
$("#photoInput").change(function (e) {
    var file, img;
    if ((file = this.files[0])) {
        img = new Image();
        img.onload = function () {
            alert("Width:" + this.width + "   Height: " + this.height);//this will give you image width and height and you can easily validate here....
        };
        img.src = _URL.createObjectURL(file);
    }
});
</script>-->

<input type="file" id="choose" multiple="multiple" />
<br>
<div id="uploadPreview"></div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<meta charset=utf-8 />
<script type="text/javascript">
    
function readImage(file) {

    var reader = new FileReader();
    var image  = new Image();

    reader.readAsDataURL(file);  
    reader.onload = function(_file) {
        image.src    = _file.target.result;              // url.createObjectURL(file);
        image.onload = function() {
            var w = this.width,
                h = this.height,
                t = file.type,                           // ext only: // file.type.split('/')[1],
                n = file.name,
                s = ~~(file.size/1024) +'KB';
        if (w > 500){
alert(w);
alert(h);
            alert("sorry");
            return false;
        } 
            
        };
//        image.onerror= function() {
//            alert('Invalid file type: '+ file.type);
//        };      
    };

}
$("#choose").change(function (e) {
    if(this.disabled) return alert('File upload not supported!');
    var F = this.files;
    if(F && F[0]) for(var i=0; i<F.length; i++) readImage( F[i] );
});
    </script>
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>