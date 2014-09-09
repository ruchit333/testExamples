<html>
<head>
<script type="application/javascript" src="jquery-1.8.3.js"></script>
<script type="text/javascript" language="javascript">
$(document).ready(function() {
	$('#myImage').width(200);
	$('#myImage').height(150);
    $('#myImage').mouseover(function() {
        $(this).css("cursor", "pointer");
        $(this).animate({
            width: "300px",height:"300px"
        }, 'fact');

    });
    $('#myImage').mouseout(function() {
        $(this).animate({
            width: "200px",height:"200px"
        }, 'slow');
    });
});
</script>
</head>
<body>
<img src="../computernerds/skin/frontend/default/default/images/banner/cloud_solution.png" alt="Image" id="myImage"></img>
</body>
</html>