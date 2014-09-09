<html>
<head>
	<script type="text/javascript" src="jquery-latest.pack.js"></script>
	<script type="text/javascript" src="jcarousellite-1.0.1.min.js"></script>
	<script type="text/javascript">
		$(function() {
			$(".anyClass").jCarouselLite({
				btnNext: ".next",
				btnPrev: ".prev"
			});
		});
	</script>
	<style>
	.comn{
		width:50px;
		height:50px;
	}
	
	</style>
	
</head>
</body>
<button class="prev"><<</button>
<button class="next">>></button>
        
<div class="anyClass">
    <ul>
        <li><div class="comn ham1" style="background:#333"></div></li>        
    </ul>
</div>
</body>
</html>