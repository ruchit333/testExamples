<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>NewGpi - Home</title>
<meta name="keywords" content="carousel theme, free templates, image carousel, darkgray, pixelated background, templatemo, CSS, HTML" />
<meta name="description" content="Carousel Theme with darkgray background - free CSS template provided by templatemo.com" />
<link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="js/jquery-1-4-2.min.js"></script> 
<!--script type="text/javascript" src="/jqueryui/js/jquery-ui-1.7.2.custom.min.js"></script--> 
<script type="text/javascript" src="js/jquery-ui.min.js"></script> 
<script type="text/javascript" src="js/showhide.js"></script> 
<script type="text/JavaScript" src="js/jquery.mousewheel.js"></script> 

<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/ddsmoothmenu.js">

/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

</script>

<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "templatemo_menu", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script> 

<!-- Load the CloudCarousel JavaScript file -->
<script type="text/JavaScript" src="js/cloud-carousel.1.0.5.js"></script>
 
<script type="text/javascript">
$(document).ready(function(){
						   
	// This initialises carousels on the container elements specified, in this case, carousel1.
	$("#carousel1").CloudCarousel(		
		{			
			reflHeight: 40,
			reflGap:2,
			titleBox: $('#da-vinci-title'),
			altBox: $('#da-vinci-alt'),
			buttonLeft: $('#slider-left-but'),
			buttonRight: $('#slider-right-but'),
			yRadius:30,
			xPos: 480,
			yPos: 32,
			speed:0.15,
		}
	);
});
 
</script>

</head>

<body id="home">

<div id="templatemo_header_wrapper">
	<div id="site_title"><h1><a href="http://www.templatemo.com">Newgpi</a></h1></div>
     <div id="templatemo_menu" class="ddsmoothmenu">
        <ul>
            <li><a href="index.php" class="selected">Home</a></li>
            <li><a href="about.php">About</a>
                
            </li>
            <li><a href="portfolio.php">Portfolio</a>
                
            </li>
            <li><a href="inquiry.php">Inquiry</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
        <br style="clear: left" />
    </div> <!-- end of templatemo_menu -->
    <div class="cleaner"></div>
</div>	<!-- END of templatemo_header_wrapper -->
<div id="templatemo_slider">
	<!-- This is the container for the carousel. -->
    <div id = "carousel1" style="width:960px; height:280px;background:none;overflow:scroll; margin-top: 20px">            
        <!-- All images with class of "cloudcarousel" will be turned into carousel items -->
        <!-- You can place links around these images -->
        <a href="http://localhost/newgpi/details.php?title=img10" rel="lightbox"><img class="cloudcarousel" src="images/slider/10.jpg" alt="CSS Templates 1" title="Website Templates 1" /></a>
        <a href="http://localhost/newgpi/details.php?title=img2" rel="lightbox"><img class="cloudcarousel" src="images/slider/2.jpg" alt="CSS Templates 2" title="Website Templates 2" /></a>
        <a href="http://localhost/newgpi/details.php?title=img3" rel="lightbox"><img class="cloudcarousel" src="images/slider/3.jpg" alt="CSS Templates 3" title="Website Templates 3" /></a>
        <a href="http://localhost/newgpi/details.php?title=img4" rel="lightbox"><img class="cloudcarousel" src="images/slider/4.jpg" alt="CSS Templates 4" title="Website Templates 4" /></a>
        
        <a href="http://localhost/newgpi/details.php?title=img6" rel="lightbox"><img class="cloudcarousel" src="images/slider/6.jpg" alt="CSS Templates 6" title="Website Templates 6" /></a>
        <a href="http://localhost/newgpi/details.php?title=img7" rel="lightbox"><img class="cloudcarousel" src="images/slider/7.jpg" alt="CSS Templates 7" title="Website Templates 7" /></a>
        <a href="http://localhost/newgpi/details.php?title=img8" rel="lightbox"><img class="cloudcarousel" src="images/slider/8.jpg" alt="CSS Templates 8" title="Website Templates 8" /></a>
    </div>
    
    <!-- Define left and right buttons. -->
    <center>
    <input id="slider-left-but" type="button" value="" />
    <input id="slider-right-but" type="button" value="" />
    </center>
</div>
<div id="templatemo_main">
	
    <div class="col one_third fp_services">
    <h2>Welcome!</h2>
        <img src="images/templatemo_image_04.jpg" alt="Image 04 " class="image_fl" />
        <p><a href="http://www.templatemo.com" target="_parent">Carousel</a> is  free css template provided by <a href="http://www.templatemo.com">templatemo.com</a> for your personal or commercial websites. Quisque nec suscipit ipsum. Fusce vitae accumsan massa.</p>
  		<ul class="templatemo_list">
            <li class="flow">Integer placerat dolor vel</li>
            <li class="flow nomr">Condimentum vulputate</li>
            <li class="flow">Itristique non suscipit id</li>
            <li class="flow nomr"> Donec eget lacus vitae leo</li>
        </ul>
    </div>
    <div class="col one_third fp_services">
        <h2>Recent News</h2>
        <div class="rp_pp">
            <img src="images/templatemo_image_01.jpg" alt="Image 01" />
            <a href="#">Integer venenatis pharetra magna vitae   condimentum   ultrices.</a>
            <p>Feb 27, 2048 - 140 comments</p>
            <div class="cleaner"></div>
        </div>
        <div class="rp_pp">
            <img src="images/templatemo_image_02.jpg" alt="Image 02" />
            <a href="#">Nulla facilisi. Vestibulum vel odio ac mi feugiat condimentum.</a>
            <p>Feb 21, 2048 - 154 comments</p>
            <div class="cleaner"></div>
        </div>
        <div class="rp_pp">
            <img src="images/templatemo_image_03.jpg" alt="Image 03" />
            <a href="#">Fusce dolor neque, placerat ac erat venenatis eu, venenatis ac leo.</a>
            <p>Feb 15, 2048 - 179 comments</p>
            <div class="cleaner"></div>
        </div>
    </div>
    <div class="col one_third no_margin_right fp_services">
        
        <h2>Testimonials</h2>
        <div class="testimonial">
            <p>Nunc vitae purus non augue scelerisque ultricies vitae et velit quis nulla id orci malesua tempus erat.</p>
            <cite>Rock  <a href="#"><span>- CEO, New Company</span></a></cite></div>
    	<div class="testimonial">
            <p>Curabitur sed felis urna, quis eleifend magna. Nunc quam mollis sem iaculis sed. Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow"><strong>XHTML</strong></a> &amp; <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow"><strong>CSS</strong></a>.</p>
    		<cite>John <a href="#"><span>- Senior Director, Company</span></a></cite></div>
    </div>
    
    <div class="cleaner"></div>
</div> <!-- END of templatemo_main -->

<div id="templatemo_bottom_wrapper">
    <div id="templatemo_bottom">
    	<div class="col one_third">
        	<h4><span></span>Blogroll</h4>
            <div class="bottom_box">
                <ul class="footer_list">
                    <li><a href="http://www.templatemo.com/page/1">Free CSS Templates</a></li>
                    <li><a href="http://www.webdesignmo.com/blog">Web Design Resources</a></li>
                    <li><a href="http://www.flashmo.com">Free Flash Templates</a></li>
                    <li><a href="http://www.templatemo.com">Website Templates</a></li>
                    <li><a href="http://www.koflash.com">Free Web Gallery</a></li>
                </ul>  
			</div>
        </div>
        <div class="col one_third">
        	<h4><span></span>Updates</h4>
            <div class="bottom_box">
                <ul class="twitter_post">
                    <li>Curabitur nec dui venenatis sem consectetur facilisis. Donec velit nisi, lacinia sed et. <a href="#">http://bit.ly/13IwZO</a></li>
                    <li>Proin dignissim, diam nec <a href="#">@TemplateMo</a> enim lorem tempus orci, ac imperdiet ante purus in justo.</li>
                </ul>
			</div>
        </div>
        <div class="col one_third no_margin_right">
        	<h4><span></span>About Us</h4>
            <div class="bottom_box">
                <p><em>Duis sem nisl, dignissim ac feugiat in, mattis sit amet est. Duis leo leo, suscipit cursus vehicula sit amet. Sed varius pellentesque massa vel rutrum.</em></p><br />              
                <div class="footer_social_button">
                    <a href="#"><img src="images/facebook.png" title="facebook" alt="facebook" /></a>
                    <a href="#"><img src="images/flickr.png" title="flickr" alt="flickr" /></a>
                    <a href="#"><img src="images/twitter.png" title="twitter" alt="twitter" /></a>
                    <a href="#"><img src="images/youtube.png" title="youtube" alt="youtube" /></a>
                    <a href="#"><img src="images/feed.png" title="rss" alt="rss" /></a>
                </div>
            </div>
        </div>
        
    	<div class="cleaner"></div>
    </div> <!-- END of tempatemo_bottom -->
</div> <!-- END of tempatemo_bottom_wrapper -->

<div id="templatemo_footer_wrapper">
    <div id="templatemo_footer">
		<a href="http://gr.forwallpaper.com/search/nick.html" title="nick wallpapers from gr.forwallpaper.com" class="footer_img_link" rel="nofollow" target="_blank"><img src="images/link.jpg" alt="nick wallpapers" title="nick wallpapers" /></a>
    	Copyright © 2048 Your Company Name | Designed by <a href="http://www.templatemo.com" target="_parent">Free CSS Templates</a>
    </div> <!-- END of templatemo_footer_wrapper -->
</div> <!-- END of templatemo_footer -->


<script type='text/javascript' src='js/logging.js'></script>
</body>
</html>