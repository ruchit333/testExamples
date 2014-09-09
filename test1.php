<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
	
	<title>jQuery jcarousel lite + jQuery Captify Demo - Onextrapixel</title>
	
	<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
		
	<script type="text/javascript" src="jquery-1.3.2.min.js"></script>
	<script type="text/javascript" src="jcarousellite_1.0.1.pack.js"></script>
	<script type="text/javascript" src="captify.tiny.js"></script>
	
	
	<script type="text/javascript">
		$(function() {
    		$(".slider").jCarouselLite({
        		btnNext: ".next",
        		btnPrev: ".prev",
        		visible: 5,
				 scroll: -1
    		});
		});
	

		$(document).ready(function(){
			$('img.captify').captify({
				// all of these options are... optional
				// ---
				// speed of the mouseover effect
				speedOver: 'fast',
				// speed of the mouseout effect
				speedOut: 'normal',
				// how long to delay the hiding of the caption after mouseout (ms)
				hideDelay: 500,	
				// 'fade', 'slide', 'always-on'
				animation: 'slide',		
				// text/html to be placed at the beginning of every caption
				prefix: '',		
				// opacity of the caption on mouse over
				opacity: '0.7',					
				// the name of the CSS class to apply to the caption box
				className: 'caption-bottom',	
				// position of the caption (top or bottom)
				position: 'bottom',
				// caption span % of the image
				spanWidth: '100%'
			});
		});

	</script>
	<style type="text/css">
.blink {
font-size: 15px;
color: red;
display: inline;
}
</style>>
</head>

<body>
    <div class="blink">
        hello
    </div>
    <p style='text-decoration: blink'>
This should be avoided as well.
</p>
	<div id="wrap">
		<h1>jQuery jCarousel Lite + jQuery Captify</h1>
		<a href="http://www.onextrapixel.com/2009/04/28/jquery-jcarousel-lite-with-pretty-image-captions-that-appear-on-rollover/" title="Back to tutorial">Back to tutorial</a>
		
		<div id="list">
			<div class="prev"><img src="images/prev.jpg" alt="prev" /></div>
					
				<div class="slider">
					<ul>
						<li>
							<a href="#" title="Title 1"><img src="images/1.jpg" alt="Title 1" class="captify" /></a>
						</li>
						
	
					</ul>
				</div>
			<div class="next"><img src="images/next.jpg" alt="next" /></div>
		</div>
	</div>
</body>
</html>