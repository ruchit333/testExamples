<?php
$conn = mysql_connect('localhost','root','');
$db = mysql_select_db('test',$conn);
$query = "SELECT * FROM tbl_abuse_words ";
$result = mysql_query($query);
$abusedWords = array();
while($row = mysql_fetch_array($result)) {
    $abusedWords[] = $row['abused_words'];
}

?>
<?php echo json_encode($abusedWords); ?>
<script type="text/javascript" language="javascript">
var bad_words_array = '<?php echo json_encode($abusedWords); ?>';
function badwords(txt) {
	
var alert_arr = new Array;
var alert_count = 0;
var compare_text = txt;

for(var i=0; i<bad_words_array.length; i++) {
	for(var j=0; j<compare_text.length; j++) {
		
		if(bad_words_array[i] == compare_text.substring(j,(j+bad_words_array[i].length)).toLowerCase()) {
			alert_count++;
		}
	}
}
//alert(alert_count);
return alert_count;
}
</script>
<script type="text/javascript" language="javascript">
function Message() {
	
	var textbox_val=document.form.textbox.value;
	
	if(textbox_val == '') {
		alert("Please enter a message");
		return false;
	}
	
	bwords = badwords(textbox_val);
	if(bwords > 0) {
		alert("Your message contains some bad words please remove it.");
                //var newstr = textbox_val.replace('', "oranges");
		document.form.textbox.focus();
		return false;
	}
}
</script>
<form action="" method="post" onsubmit="return Message();" name="form">
<textarea name="textbox" id="textBox"></textarea>
<input type="submit" value=" Submit "/>
</form>
