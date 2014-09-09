<div id="dialog-confirm" title="Empty the recycle bin?">
    <p><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>
        These items will be permanently deleted and cannot be recovered. Are you sure?</p>
</div>
<script type="text/javascript">
allowed = true;
$("#dialog-confirm").dialog({
    resizable: false,
    height: 140,
    modal: true,
    buttons: {
        Proceed: function() {
            allowed = true;
            $(this).dialog("close");
        },
        Cancel: function() {
            allowed = false;
            $(this).dialog("close");
        }
    }
});
if (allowed){
    $('body').append("<div>The action was allowed!</div>");
} else {
    $('body').append("<div>The action was allowed!</div>");
}
var answer2 = confirm("Proceed?");
if (answer2){
    $('body').append("<div>The action2 was allowed!</div>");
} else {
    $('body').append("<div>The action2 was allowed!</div>");
}
</script>


