<!DOCTYPE html>
<!--
Copyright (c) 2003-2014, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.md or http://ckeditor.com/license
-->
<?php 
$conn = mysql_connect('localhost', 'root', '');
$db = mysql_select_db('test',$conn);
$query = "select * from state";
$result = mysql_query($query);
$array_state = array();
while ($row = mysql_fetch_array($result)) {
    $array_state[] = $row;
}
?>
<html>
<head>

	<title>Full Page Editing &mdash; CKEditor Sample</title>
        <script src="js/ckeditore/ckeditor.js"></script>
   
        <link rel="stylesheet" href="js/ckeditore/contents.css">
	
</head>
<body>
    <form name='editor' id='editor' action="outputCkEditor.php" method='POST'>
	
		<label for="editor1">
			CKEditor output the entire page including content outside of
			<code>&lt;body&gt;</code> element, so content like meta and title can be changed:
		</label>
        <textarea  id="editor1" name="editor1" rows="10" style="widht:300px;">
			<?php echo "<pre>";
                        print_r($array_state);
                        echo "</pre>";?>
		</textarea>
		
		<p>
			<input type="submit" value="Submit">
		</p>
    </form>
	<script>

			CKEDITOR.replace( 'editor1', {
				allowedContent: true
			});

            </script>
</body>
</html>
