<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<script type="text/javascript">
    function addMore() {
        $('#createTextbox').append("<div><input size='50' name='ClsAdminProduct_feature[]' id='ClsAdminProduct_feature[]' type='text'><a style='margin-left: 15px;' href='javascript:void(0)' onclick='removeBox(this);'>remove</a></div>");
        //document.getElementById("createTextbox").innerHTML = document.getElementById("createTextbox").innerHTML +"<input name='ClsAdminProduct_feature[]' id='ClsAdminProduct_feature[]' type='text'><br/>";
    }
    function removeBox(obj) {
        if ($(obj).prev().val() != '') {
            var result = confirm("Are you sure you want to remove?");
            if (result == true) {
                $(obj).parent().remove();
            }
        } else {
            $(obj).parent().remove();
        }
    }
</script>