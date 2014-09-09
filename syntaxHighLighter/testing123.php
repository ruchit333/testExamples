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

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Hello SyntaxHighlighter</title>
	<script type="text/javascript" src="scripts/shCore.js"></script>
	<!--<script type="text/javascript" src="scripts/shBrushJScript.js"></script>-->
	<script type="text/javascript" src="scripts/shBrushPhp.js"></script>
	<link type="text/css" rel="stylesheet" href="styles/shCoreDefault.css"/>
	<script type="text/javascript">SyntaxHighlighter.all();</script>
</head>

<body style="background: white; font-family: Helvetica">

<h1>Hello SyntaxHighlighter</h1>

<pre class="brush: php;">
<textarea class="brush: php"></textarea>
<?php echo $abusedWords; ?>
</pre>
</html>
