<html>
    <body>
        <form id="testing" name="testing" action="demo.php?id=" method="post">
            <input type="text" name="test" id="test"/>
            <input type="submit" name="submit" value="submit" onclick="return valAction(this.form,'id=2');"
        </form>
    </body>
</html>
<script type="text/javascript">
    function valAction(frm,id)
    {
        var val;
        val = 2;
    }
</script>
            
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

