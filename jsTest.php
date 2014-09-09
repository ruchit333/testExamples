<script type="text/javascript" src="MessageBox.js"></script>
<script type="text/javascript">
// Basic alert:
Ext.Msg.alert('Status', 'Changes saved successfully.');

// Prompt for user data:
Ext.Msg.prompt('Name', 'Please enter your name:', function(btn, text){
    if (btn == 'ok'){
        // process text value...
    }
});

// Show a dialog using config options:
Ext.Msg.show({
   title:'Save Changes?',
   msg: 'Your are closing a tab that has unsaved changes. Would you like to save your changes?',
   buttons: Ext.Msg.YESNOCANCEL,
   fn: processResult,
   animEl: 'elId'
});
</script>