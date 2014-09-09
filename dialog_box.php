<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset="utf-8">
	<title>jQuery UI Dialog - Modal confirmation</title>
	<link rel="stylesheet" href="ui/css/jquery.ui.all.css">
	<style>
#dialog-confirm {
	display: none;
}
</style>
	<script src="jquery-1.8.0.js"></script>
	<script src="ui/js/jquery.ui.core.js"></script>
	<script src="ui/js/jquery.ui.widget.js"></script>
	<script src="ui/js/jquery.ui.button.js"></script>
	<script src="ui/js/jquery.ui.position.js"></script>
	<script src="ui/js/jquery.ui.dialog.js"></script>
	<link rel="stylesheet" href="ui/css/demos.css">
	<script>
	/*$(function() {
		// a workaround for a flaw in the demo system (http://dev.jqueryui.com/ticket/4375), ignore!
		
		
		var flag = true;
		$( "#dialog-confirm" ).dialog({
			resizable: false,
			height:140,
			modal: true,
			buttons: {
				Yes: function() {
					flag = true;
					$( this ).dialog( "close" );
				},
				Cancel: function() {
					flag = false;
					$( this ).dialog( "close" );
				}
			}
			
		});
	alert(flag);
	});
	*/
	$(document).ready(function(e) {
        
    
    $("#dialog-confirm").dialog({
        resizable: false,
        height: 300,
        modal: true,
        buttons: {
            Yes: function() {
				$("#dialog-confirm").dialog('close');
            },
			Cancel: function() {
				$.ajax({
                    type: "POST",
                    url: "runAjax.php",
                    data: ({getSession : 1}),
					cache: false,
					success: function(res) {
						alert(res);
                        $(this).dialog('close');
                    }
                });
                
            }
        }
    });

	});
	</script>
	</head>
	<body>
    <?php 
		session_start();
		echo "<pre>"; print_r($_SESSION); 
	?>
    <div id="dialog-confirm" title="Are You Sure?">
      <p><span class="ui-icon ui-icon-alert" style="float: left; margin: 0 7px 20px 0;"></span>Redirect to Spanuish</p>
    </div>
</body>
</html>
