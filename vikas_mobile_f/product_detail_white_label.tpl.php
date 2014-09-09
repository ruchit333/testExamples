<div id="pagewrapper">
  <div id="current_notice">
    <div class="notice"></div>
  </div>
  <div class="singlecontentwrapper">
    <div id="content-one">
      <div style="display: none"> <a href="#ninjadiv" id="display-ninjadiv">&nbsp;</a>
        <div id="ninjadiv"></div>
      </div>
      <div id="content-one" itemscope itemtype="http://data-vocabulary.org/Product">
        <script type="text/javascript">
        /* Copyright (C) 2008-2011 by Struq */
        /* Struq SL v2.2 (jquery) */

        $(document).ready(function() {
            var slc = [];
            var rnd = parseInt(Math.random() * 10000000000000000);
            var protocol = (document.location.protocol == "https:" ? "https:" : "http:");

            $('.struq_SL_DF_container').each(function() {
                var items = [];
                var ckey = $(this).attr('title');

                $(this).find('.struq_SL_DF').each(function() {
                    var pn = $(this).attr('title');
                    var pv = $(this).text();
                    items[items.length] = encodeURIComponent(pn) + '=' + encodeURIComponent(pv);
                });

                slc[slc.length] = ckey + "=" + (items.join('|'));
            });

            if (slc.length == 0)
                return;

            var surl = protocol + '//app.struq.com/s/s/KMYtWqaYQECVT5lfKt2IRw/'
                + '?v=2&qs=' + encodeURIComponent(slc.join('&'))
                + '&rnd=' + rnd;
            $("body").append('<ifr'+'ame src="' + surl + '" style="width:0px; height:0px; border: 0px"></ifr'+'ame>');
        });
    </script>
        <div class="struq_SL_DF_container" title="detail" style="display:none;">
          <div class="struq_SL_DF" title="pid">40697</div>
        </div>
        <div class="struq_SL_DF_container" title="rel" style="display:none">
          <div class="struq_SL_DF" title="pid">15581</div>
        </div>
        <div class="struq_SL_DF_container" title="rel" style="display:none">
          <div class="struq_SL_DF" title="pid">37622</div>
        </div>
        <div class="struq_SL_DF_container" title="rel" style="display:none">
          <div class="struq_SL_DF" title="pid">40369</div>
        </div>
        <div class="struq_SL_DF_container" title="rel" style="display:none">
          <div class="struq_SL_DF" title="pid">30552</div>
        </div>
        <div class="struq_SL_DF_container" title="rel" style="display:none">
          <div class="struq_SL_DF" title="pid">40400</div>
        </div>
        <div id="product-content">
        <!--<div style="margin-bottom:8px;"> <a href="/">Return to Home Page</a> </div>-->
          <div style="width:359px;float:left;margin-right:8px;">
            <!--<div class="large-clearance"> Sale &ndash; Limited Stock <span class="rd-tl"></span> <span class="rd-tr"></span> <span class="rd-bl"></span> <span class="rd-br"></span> </div>-->
            <br style="clear:both;" />
            <!-- <div class="layout1"> -->

            <a href="<?php echo HTTP_PATH . $productsDetailArr["prod_image"]; ?>" title="View larger images of <?php echo $productsDetailArr["prod_name"]; ?>" rel="product-gallery" view="#image-0" target="_blank">
            <div id="product-gallery-main-image">
			<?php
            echo $base_obj->displayImageThumb(PRODUCT_IMG_HTTP_PATH, PRODUCT_IMG_ABS_PATH, $productsDetailArr["prod_image"], $productsDetailArr["prod_name"], "large",'300','300');
            ?>
             </div>
            </a>
            <meta itemprop="image" content="http://images.mobilefun.co.uk/graphics/300pixelp/case-mate-hula-bumper-for-iphone-5c-white-p40697-300.jpg" />
            <div style="width:100%;"> <img id="gallery-prev" src="http://images.mobilefun.co.uk/graphics/rebrand/icons/arrow-left.gif"
             alt="Previous image" title="Previous image" />
              <div id="thumbnails">
               <table border="0" cellpadding="0" cellspacing="0" style="margin:0 auto;">
                  <tbody>
                    <tr>
					<?php
                    if (count($productsImgArr)) {
                        foreach ($productsImgArr as $key => $productsImgDetailArr) {
                    ?>
                      <td><div style="padding:5px;"><a href="<?php echo PRODUCT_IMG_HTTP_PATH . $productsImgDetailArr['prod_image']; ?>" rel="product-gallery" view="#image-1" type="image">
						<?php
                        echo $base_obj->displayImageThumb(PRODUCT_IMG_HTTP_PATH, PRODUCT_IMG_ABS_PATH, $productsImgDetailArr["prod_image"], $productsDetailArr["prod_name"], "small", '50','50');
                        ?>
                      </a> </div></td>

                  <?php
				  	}

				   $display = 'block';
				   } else {
					$display = 'none';
				   }
				  ?>
                  </tr>
                  </tbody>
                </table>
              </div>
              <img src="http://images.mobilefun.co.uk/graphics/rebrand/icons/arrow-right.gif" id="gallery-next" alt="Next image" title="Next image" /> <br style="clear:both;" />
              <a href="#" id="magnifier" title="View larger images of Case-Mate Hula Bumper for iPhone 5C - White" onclick="$('#product-gallery-main-image').parent().trigger('click');return false;" style="height: 15px; margin-top: 3px; display:<?php echo $display;?>">Enlarge images</a> </div>
            <script type="text/javascript">

    $(document).ready(function() {

        var THUMBNAIL_LIMIT = 5;

        if($('#thumbnails').find('img').length > THUMBNAIL_LIMIT) {
            $('#gallery-prev').css('visibility', 'visible');
            $('#gallery-next').css('visibility', 'visible');
        }


        $('#gallery-prev').click(function() {
            $('#thumbnails').animate({
                scrollLeft : '-=62px'
            }, 100);
        });

        $('#gallery-next').click(function() {
            $('#thumbnails').animate({
                scrollLeft : '+=62px'
            }, 100);
        });

        $('#fancybox-right, #fancybox-left').hide();

        $('a[rel=product-gallery]').click(function(){
            if (typeof(_vis_opt_top_initialize) == "function") {
                _vis_opt_goal_conversion(206);
            }

            var id = $(this).attr('view');

            if(id != undefined)
            {
                ProductGallery.set($(this).attr('view'));
            }

            return false;

        }).fancybox({
            'href' : '#gallery-popup',
            'titleShow' : false,
            'showNavArrows' : false,
            'centerOnScroll' : false,
            'showCloseButton' : false,
            'autoDimensions' : false,
            'autoScale' : false,
            'width' : 850,
            'height' : 515
        });
    });

</script>
            <!-- </div> -->

            <style type="text/css">

    #gallery-popup {
        width:850px;
        height:500px;
    }

    #gallery-popup .thumbnails {
        width:355px;
        height:500px;
        border:solid #ccc 1px;
        float:right;
        padding:5px;
    }

    #gallery-popup .thumbnails .tile {
        border:solid #ccc 1px;
        border-radius:5px;
        -moz-border-radius: 5px;
        float:left;
        width:50px;
        height:50px;
        padding:5px;
        display:block;
        margin:4px;
        cursor:pointer;
        position:relative;
    }

    #gallery-popup .thumbnails .selected {
        border-color:#000;
    }

    #gallery-popup .large-view {
        width:465px;
        height:500px;
        border:solid #ccc 1px;
        float:left;
        padding:5px;
        text-align:center;
        position:relative;
    }

    #gallery-popup .large-view .tile {
        display:none;
        padding-top:20px;
        position:absolute;
        top:0;
        left:0;
        width:465px;
        height:460px;
        z-index:10;
        background:#fff;
    }

    #gallery-popup .large-view .tile.video {
        padding-top:65px;
        height:415px;
        z-index:25;
    }

    #gallery-popup .navigation {
        position:absolute;
        top:480px;
        left:5px;
        width:465px;
        z-index:25;
    }

    #gallery-popup .thumbnails .navigation {
        top:485px;
        width:355px;
    }

    #gallery-popup .large-view .previous {
        width:80px;
        float:left;
    }

    #gallery-popup .large-view .next {
        width:80px;
        float:right;
    }

    #gallery-popup .close {
        width:80px;
        float:right;
    }

    span.image.tile img
    {
        width: 50px;
        height: 50px;
    }

</style>
            <div style="display:none;">
            	<div id="gallery-popup">
            		<div class="thumbnails">
                            <a class="button close" href="#">Close</a>
                            <strong style="margin-top:10px; display:block;">Product Images</strong>
                            <br />
                         <?php
                    		if (count($productsImgArr)) {
                        		$i=0;
								foreach ($productsImgArr as $key => $productsImgDetailArr) {
                		?>
                        <span class="tile image" view="#image-<?php echo $i;?>">
						<?php
                        echo $base_obj->displayImageThumb(PRODUCT_IMG_HTTP_PATH, PRODUCT_IMG_ABS_PATH, $productsImgDetailArr["prod_image"], $productsDetailArr["prod_name"], "small");
                        ?>
                        </span>
                        <?php
						$i++;
						}
						} ?>

                	</div>
            		<div class="large-view">
            			<?php
                    		if (count($productsImgArr)) {
                        		$i=0;
								foreach ($productsImgArr as $key => $productsImgDetailArr) {

						?>
                        <div class="tile image" id="image-<?php echo $i; ?>" style="background: url('<?php echo PRODUCT_IMG_HTTP_PATH.$productsImgDetailArr["prod_image"]; ?>') no-repeat scroll center transparent; display:block;"></div>
            			<?php $i++; } }?>
                        <div class="navigation">
                        	<a class="button previous" href="#">&lt; Previous</a> <a class="button next" href="#">Next &gt;</a>
                        </div>
            		</div>
            	</div>
            </div>
            <script type="text/javascript">
    function ProductGallery()
    {
        $('#gallery-popup .thumbnails .tile:first').addClass('selected');
        $('#gallery-popup .large-view .tile:first').show();

        if($('#gallery-popup .thumbnails .tile').size() == 1)
        {
            $('#gallery-popup .button.previous, #gallery-popup .button.next').hide();
        }

        this.set = function(id)
        {
            $('#gallery-popup .thumbnails .tile').removeClass('selected');
            $('#gallery-popup .thumbnails .tile object').each(function(){
                this.stopVideo();
            });
            $('#gallery-popup .large-view .tile').hide();

            $('#gallery-popup .thumbnails .tile[view=' + id + ']').addClass('selected');
            $(id).show();
        }

        this.show = function(id)
        {
            $('#gallery-popup .thumbnails .tile').removeClass('selected');
            $('#gallery-popup .thumbnails .tile object').each(function(){
                this.stopVideo();
            });
            $('#gallery-popup .thumbnails .tile[view=' + id + ']').addClass('selected');

            $('#gallery-popup .large-view .tile:visible').stop(true, true);

            $('#gallery-popup .large-view .tile:visible').fadeOut(
                400,
                function(){
                    $(id).fadeIn(400);
                }
            );
        }

        this.previous = function()
        {
            var current = $('#gallery-popup .thumbnails .tile.selected');
            var prev;

            $('#gallery-popup .thumbnails .tile').each(function(){

                if($(this).attr('view') == current.attr('view'))
                {
                    return false;
                }

                prev = $(this);

            });

            if(prev == undefined)
            {
                prev = $('#gallery-popup .thumbnails .tile:last');
            }

            var id = prev.attr('view');

            this.show(id);
        }

        this.next = function()
        {
            var current = $('#gallery-popup .thumbnails .tile.selected');
            var found = false;
            var next;

            $('#gallery-popup .thumbnails .tile').each(function(){

                if(found)
                {
                    next = $(this);
                    return false;
                }

                if($(this).attr('view') == current.attr('view'))
                {
                    found = true;
                }

            });

            if(next == undefined)
            {
                next = $('#gallery-popup .thumbnails .tile:first');
            }

            var id = next.attr('view');

            this.show(id);
        }
    }

    var ProductGallery = new ProductGallery();

    $(document).ready(function(){

        $('#gallery-popup .thumbnails .tile').click(function(){
            if(!$(this).hasClass('selected'))
            {
                ProductGallery.show($(this).attr('view'));
            }
        });

        $('#gallery-popup .large-view .previous').click(function(){
            ProductGallery.previous();
            return false;
        });

        $('#gallery-popup .large-view .next').click(function(){
            ProductGallery.next();
            return false;
        });

        $('#gallery-popup .thumbnails .close').click(function(){
            $.fancybox.close();
            return false;
        });

    });
</script>
          </div>
          <div id="prod-desc-sub" style="width:360px;float:left;">
            <h1 style="line-height:20px;" itemprop="name"><?php echo $productsDetailArr['prod_name']; ?></h1>
            <p><strong></strong></p>
            <p class="partno">Product SKU : <?php echo $productsDetailArr['prod_sku']; ?></p>
            <div class="reference"><?php echo $productsDetailArr['prod_short_desc']; ?></div>
          </div>
          <div class="js-only"> <a name="description"></a> <a name="compatibility"></a> <a name="videos"></a> <a name="siblings"></a> <a name="related-cats"></a> </div>
          <br style="clear:both;" />
          <div id="product-tabs" class="product-tabs">
            <ul id="product-tabs-nav" class="product-tabs-nav js-only">
              <li class="nav-active"> <a href="javascript:void(0);" title="Description for <?php echo $productsDetailArr['prod_name']; ?>" tab="description" class="product-tab-nav"> <span id="prodpagetabactive" class="tab-active"> Long Description

                </span> </a> </li>
            </ul>
          </div>
		  <div tab="description" class="product-description tabbed-content description" style="margin-left:20px;">
			<?php
            	echo html_entity_decode($productsDetailArr['prod_long_desc']);
            ?>
          </div>

          <script type="text/javascript">
    /*

    Commented out as AJAX reviews are not currently required. PH - 7/11/12

    var offset = 0;
    var language = 5;
    var rating;
    var sortby = 0;
    var productId = 40697;

    $(document).ready(function(){
        retrieveReviews(0, window.language, window.rating, window.sortby, window.productId);

        $('.load-more-reviews').click(function() {
            offset = window.offset + 5;

            retrieveReviews(offset, window.language, window.rating, window.sortby, window.productId);
        });
    });
    */
</script>
          <div class="ajax-reviews" style="display:none;margin-top:16px;">
            <div class="major-header"> Customer Reviews:
              <hr />
            </div>
            <div class="ajax-reviews-anchor"> </div>
            <div class="load-more-reviews float-left"> Load more reviews&nbsp;&nbsp;&#x25BC; </div>
          </div>
          <br style="clear: both;" />
          
          <span id="related-products" class="single-tab"> Products that may also interest you:
          <div class="tab-tr-inactive" style="background: none repeat scroll 0 0 #808080;"></div>
          <div class="tab-tl-inactive" style="background: none repeat scroll 0 0 #808080;"></div>
          </span>
          <div class="featured-product bottom-fade-border">
            <ul class="five-col-list">
			<?php
                    if (count($relatedProductArr)) {
                        $i = 0;
                        $k = 0;
            ?>
            <?php
                foreach ($relatedProductArr as $key2 => $relatedProductDetailArr1) {
					foreach ($relatedProductDetailArr1 as $key1 => $relatedProductDetailArr) {
            ?>
            <li style="float: left; margin: 5px 2px;padding: 1px;position: relative;width: 142px; text-align:center;">
            <a href="<?php echo HTTP_PATH; ?>product_detail_white_label.php?product_id=<?php echo $relatedProductDetailArr['prod_id']; ?>" title="">
                <?php echo $base_obj->displayImageThumb(PRODUCT_IMG_HTTP_PATH, PRODUCT_IMG_ABS_PATH, $relatedProductDetailArr["prod_image"],$relatedProductDetailArr["prod_name"], "small",'117','65');
            ?>
            </a>
            <br />
            <a href="<?php echo HTTP_PATH; ?>product_detail_white_label.php?product_id=<?php echo $relatedProductDetailArr['prod_id']; ?>" class="strongcat" style="text-decoration:underline;"><?php echo $relatedProductDetailArr['prod_name']; ?>
            </a>
            <br />
            <span><?php echo $relatedProductDetailArr['prod_sku']; ?></span>
            <br />
            <?php if ($relatedProductDetailArr["prod_stock_qty"] > 0) { ?>
            	<span class="instock" title="">
            		In stock
            	</span>
            <?php } else {?>
            	<span class="instock" title="">
            		Out of stock
            	</span>
            <?php } ?>
            <br />
            <div class="price">
            <?php
				$spOfferPrice = $base_obj->getDiscountedPriceForMerchant($relatedProductDetailArr["prod_sp_offer_price"], VAT);
				echo "&pound;" . $base_obj->convertNumberToFloat($spOfferPrice);
          	?>
            </div>
            <p class="layout3" style="color:#666666;font-size:10px;">(inc. VAT)</p>
            </li>
            <?php

        	$i++;
			$k++;
			if ($i == 5) {
            	echo '<br style="clear:both;"></ul><ul class="five-col-list">';
				$i=0;
			}
			}
			}
			} else { ?>
                <div style="background: #F7F7F7; border: 1px solid #DDDDDD; padding: 10px; margin-bottom: 10px;">
                    There are no related products for this product.
                </div>
			<?php }?>
            </ul>
          </div>
        </div>
        <style type="text/css">
        #prod_page_quantity
        {
            display: inline !important;
        }
    </style>
        <div id="product-sidebar">
          <script type="text/javascript" src="/js/sliding_sidebar.js"></script>
          <style type="text/css">
    .border-box {
        border: solid 1px #ccc;
        border-radius: 5px;
        background: #fff;
        width: 233px;
        padding: 5px;
        margin-bottom: 5px;
    }

    .no-underline {
        text-decoration: none;
    }

    .border-box .title-text {
        font-size: 22px;
        font-weight: bold;
    }

    .border-box .large-text {
        font-size: 19px;
    }

    .border-box .subtitle {
        font-size: 10px;
        color: #666666
    }

    .border-box .large-link {
        font-size: 12px;
        font-weight: bold;
    }
</style>
          <div id="static_sidebar" style="margin: 18px 0px 0px;">
            <div id="sidebar-mybasket" class="sidebar-border-box border-white-box sidebar-large" itemprop="offerdetail" itemscope itemtype="http://data-vocabulary.org/Offer">
              <meta itemprop="price" content="21.49" />
              <meta itemprop="currency" content="USD" />
              <span style="font-size:22px; color: #EF4123;">
              <strong>
              NOW ONLY <?php  $spOfferPrice = $base_obj->getDiscountedPriceForMerchant($productsDetailArr["prod_sp_offer_price"], VAT);
                		echo "&pound;" . $base_obj->convertNumberToFloat($spOfferPrice);
              			?>
              </strong>
              </span>
              <p class="layout3" style="color:#666666;font-size:10px;">(inc. VAT)</p>
              <div>
                <form method="post" action="basket.php" class="add_to_basket" enctype="multipart/form-data" id="product">
				<?php
                	if ($productsDetailArr['prod_stock_qty'] > 0) {
                ?>
                  <input type="hidden" name="action" value="add" />
                  <input type="hidden" name="prod_id" value="<?php echo $productsDetailArr['prod_id'];?>" />
                  <span id="product_quantity_issues"></span> <span>
                  <div id="prod_page_quantity" style="display: none;">Quantity
                    <input type="text" name="quantity" size="3" value="1" />
                  </div>
                  </span>
                  <!--<input type="hidden" name="redirect_url" class="url" value="" />-->
                  <input type="submit" name="add_to_cart" id="add_to_cart" class="addtobasket" value="Add to Basket"/>
                <?php } ?>
                </form>
                <img src="<?php echo HTTP_PATH_IMG;?>order-loading.gif" style="display:none;" id="addtobasket-load" />
                <script type="text/javascript">
                        $('#static_sidebar .addtobasket').parent('form').submit(function(){
                            var value = parseInt($('#product_quantity_box').val());
                            if(value > 0 && value <= 999)
                            {
                                $('.addtobasket').css('opacity', '0.5');
                                $('.addtobasket').attr('disabled', 'disabled');
                                $('#addtobasket-load').show();
							}
                            else
                            {
                                $('#product_quantity_issues').replaceWith('<span style="color: red;">Invalid Quantity</span><br /><br />');
                                return false;
                            }
                        });
				</script>
              </div>
              <!--<a rel="nofollow" target="_blank" class="business-account-popup" href="http://www.mobilefun.co.uk/MobileFun-Corporate-Account.htm" title="Sign up for a business account">Sign up for a business account</a>
              <div class="rd-tl"></div>
              <div class="rd-tr"></div>
              <div class="rd-bl"></div>
              <div class="rd-br"></div>-->
            </div>
            <div id="stock-status-main" class="sidebar-border-box border-white-box sidebar-large" > <span id="prod-page-stockstatus" class="sidebar-title sidebar-title-dark-grey sidebar-large"> Stock status </span>
              <div id="textualstockstatus">
				<?php
                if ($productsDetailArr['prod_stock_qty'] > 0) { ?>
                	<span title="" class="instock"style="font-size:15px;">In stock</span>
                <?php } else { ?>
					<span title="" class="instock"style="font-size:15px;">Out of Stock</span>
				<?php }?>
				<br />
                <br />
              </div>

            <span id="product_rhs_social" class="sidebar-title sidebar-title-dark-grey sidebar-large"> Bookmark/Share <span class="rd-tl"></span> <span class="rd-tr"></span> </span>
            <div id="product_rhs_social" class="sidebar-border-box dark-grey-border-white-box sidebar-large">
              <div style="text-align:center;">
                <div style="line-height:24px;display:inline;margin-right:8px;"> <a href="http://www.facebook.com/sharer.php?u=http%3A%2F%2Fwww.mobilefun.co.uk%2Fcase-mate-hula-bumper-for-iphone-5c-white-p40697.htm&t=Case-Mate+Hula+Bumper+for+iPhone+5C+-+White" onclick="PopupWindow('http://www.facebook.com/sharer.php?u=http%3A%2F%2Fwww.mobilefun.co.uk%2Fcase-mate-hula-bumper-for-iphone-5c-white-p40697.htm&t=Case-Mate+Hula+Bumper+for+iPhone+5C+-+White', 800, 400);return false;"
                    target="_blank" title="Share on Facebook" rel="nofollow"> <img src="http://images.mobilefun.co.uk/graphics/rebrand/badges/facebook.gif" alt="Share on Facebook" /> </a> </div>
                <div style="line-height:24px;display:inline;margin-right:8px;"> <a href="http://twitter.com/home?status=Cool+product+idea+at+%23MobileFun%3A+http%3A%2F%2Fmobilefun.co.uk%2Fproduct%2F40697.htm" onclick="popUp('http://twitter.com/home?status=Cool+product+idea+at+%23MobileFun%3A+http%3A%2F%2Fmobilefun.co.uk%2Fproduct%2F40697.htm', 800, 400);return false;"
                        target="_blank" title="Share on Twitter" rel="nofollow"> <img src="http://images.mobilefun.co.uk/graphics/rebrand/badges/twitter.gif" alt="Share on Twitter" /> </a> </div>
              </div>
              <div class="rd-tl"></div>
              <div class="rd-tr"></div>
              <div class="rd-bl"></div>
              <div class="rd-br"></div>
            </div>
          </div>
          <br style="clear:both;" />
        </div>
        <br style="clear:both;" />
      </div>
      <script type="text/javascript">
    document.write('<div id=\"cto_se_7710250_ac\" style=\"display:none\">');
    document.write('<div class=\"ctoWidgetServer\">http:\/\/mobilefunuk.widget.criteo.com\/pmo\/<\/div>');
    document.write('<div class=\"ctoDataType\">sendEvent<\/div>');
    document.write('<div class=\"ctoParams\">wi=7710250&pt1=2&i=40697<\/div>');
    document.write('<\/div>');
</script>
      <script type="text/javascript" src="/js/criteo.js"></script>

    </div>
    <br style="clear:both;" />
  </div>
  <div style="text-align: center;"> </div>
</div>
</div>