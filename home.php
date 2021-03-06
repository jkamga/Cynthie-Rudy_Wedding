
<!DOCTYPE html>
<html lang="en">
<?php
require 'prevent_free_session.php';
?>
<head>
    <title>Home</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" media="screen" href="css/reset.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/grid_24.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/slider.css">
    <link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>
    <script src="js/jquery-1.7.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/tms-0.4.1.js"></script>
    <script>
		$(document).ready(function(){				   	
			$('.slider')._TMS({
				show:0,
				pauseOnHover:true,
				prevBu:'.prev',
				nextBu:'.next',
				playBu:false,
				duration:800,
				preset:'fade',
				pagination:'.pags',
				pagNums:false,
				slideshow:7000,
				numStatus:false,
				banners:false,
				waitBannerAnimation:false,
				progressBar:false
			})		
		});
		
	</script>
	<!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
   		<script type="text/javascript" src="js/html5.js"></script>
    	<link rel="stylesheet" type="text/css" media="screen" href="css/ie.css">
	<![endif]-->
</head>
<body>           			
   <header>                   	
      <h1 id="logo"><a href="home.php"><img style="width: 75%;" src="images/logo.png" alt="Cynthie & Rudy"></a></h1> 
      <nav>  
        <ul class="menu">
              <li class="current"><a href="home.php">about</a></li>
              <li><a href="wedding.html">wedding</a></li>
              <li><a href="album.html">album</a></li>
             
              <li><a href="wishes.html">your wishes</a></li>
              <li><a href="contacts.html">contacts</a></li>	
              <li id="donation">
			  <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
			<input type="hidden" name="cmd" value="_donations">
			<input type="hidden" name="business" value="jkamga.officiel@gmail.com">
			<input type="hidden" name="lc" value="CA">
			<input type="hidden" name="item_name" value="Rudy & Cinthy">
			<input type="hidden" name="item_number" value="wedding">
			<input type="hidden" name="no_note" value="0">
			<input type="hidden" name="currency_code" value="CAD">
			<input type="hidden" name="bn" value="PP-DonationsBF:btn_donateCC_LG.gif:NonHostedGuest">
			<input type="image" src="https://www.paypalobjects.com/fr_CA/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - la solution de paiement en ligne la plus simple et la plus sécurisée !">
			<img alt="" border="0" src="https://www.paypalobjects.com/fr_FR/i/scr/pixel.gif" width="1" height="1">
			</form>
			</li>			  
          </ul>
      </nav>
	 
    </header>  
	
    <div id="slide">
       <div class="slider">
          <ul class="items">
              <li><img src="images/slide-1.jpg" alt="" /></li>
              <li><img src="images/slide-2.jpg" alt="" /></li>
              <li><img src="images/slide-3.jpg" alt="" /></li>
              <li><img src="images/slide-4.jpg" alt="" /></li>
          </ul>
       </div>
       <ul class="pags">
            <li><a href="#"><img src="images/slide-1-small.jpg" alt=""><span></span></a></li>
            <li><a href="#"><img src="images/slide-2-small.jpg" alt=""><span></span></a></li>
            <li><a href="#"><img src="images/slide-3-small.jpg" alt=""><span></span></a></li>
            <li><a href="#"><img src="images/slide-4-small.jpg" alt=""><span></span></a></li>
       </ul>
       <a href="#" class="prev">&nbsp;</a><a href="#" class="next">&nbsp;</a>
    </div>
  <!--==============================content================================-->
    <section id="content"><div class="ic">More Website Templates @ TemplateMonster.com. July 30, 2012!</div>
    	<div class="container_24">
        	<div class="grid_7">
            	<div class="top-1 right-1">
                    <h2 class="h2-border">Love <span>story:</span></h2>
                    <p class="p1 top-2">Kate&amp;Leo is one of <a href="http://blog.templatemonster.com/free-website-templates/" class="link" target="_blank">Free Website
                    Templates</a> created by TemplateMonster.com team. This website template is optimized 
                    for 1280X1024 screen resolution.It is 
                    also XHTML &amp; CSS valid.</p>
                    <p class="p-border">The PSD source files of this <a class="link" href="http://blog.templatemonster.com/2012/07/30/free-website-template-jquery-slider-wedding-page/" target="_blank" rel="nofollow">Kate&amp;Leo</a> template are available for free for the registered members of TemplateMonster.com. Feel free to 
                    get them!</p>
                    <p class="p-border clr-1 top-3">Lorem ipsum dolor sit amet, onsectetur adipiscing elit. Vivamus sed arcu duieu tincidunt sem.Vivamus hendrerit mauris 
                    ut dui gravida ut. </p>
                    <a href="#" class="link-1">Read more</a>
				</div>
    		</div>
            <div class="grid_1">
            	<div class="line-2">&nbsp;</div>
            </div>
            <div class="grid_8">
            	<div class="top-1 right-1">
                	<h3><strong>About</strong> Cynthie</h3>
                    <div class="box-1">
                    	<img src="images/page1-img1.jpg" alt="" class="img-border img-indent">
                        <div class="extra-wrap">
                        	<p class="text-1">Cynthie</p>
                            <p class="text-2">24 years old<br>Beginner actress</p>
                        </div>
                    </div>
                    <p class="text-3 top-4">Vivamus sed arcu duieu tincidunt sem. Vivamus endrerit mauris ut dui gravida ut viverra lectus tincidunt. </p>
                    <p class="p-border">Cras mattis tempor eros nec tristique. Sed sed felis arcu, vel vehicula augue. Maecenas faucibus sagittis cursus. Fusce tincidunt, tellus eget tristique cursus, orci mi iaculis sem.</p>
                    <a href="#" class="link-1">Read more</a>
                </div>
            </div>  
            <div class="grid_1">
            	<div class="line-2">&nbsp;</div>
            </div>  
            <div class="grid_7">
            	<div class="top-1">
                	<h3><strong>About</strong> Rudy</h3>
                    <div class="box-1">
                    	<img src="images/page1-img2.jpg" alt="" class="img-border img-indent">
                        <div class="extra-wrap">
                        	<p class="text-1">Rudy </p>
                            <p class="text-2">28 years old<br>Layer</p>
                        </div>
                    </div>
                    <div class="comments">
                    	<div class="comments-corner"></div>
                        <div class="comment-1">
                            <div class="comment-2">
                                <p class="text-4">Vivamus sed arcu duieu tincidunt sem. Vivamus endrerit mauris ut dui 
        gravida ut viverra lectus tincidunt.</p>
                                <p class="text-5 top-5">Lorem ipsum dolor sit amet, onsec
        tetur adipiscing elit. Vivamus sed 
        arcu duieu tincidunt sem Vivamus. </p>
                            </div>
						</div>
                    </div>
                    <a href="#" class="link-1">Read more</a>
                </div>
            </div>  
            <div class="clear"></div>
        </div>
    </section> 
<!--==============================footer=================================-->
  <footer>
      <p><strong>© 2014  Cynthie&amp;Rudy</strong><br>by new home tech</p>
      <div class="soc-icons"><a href="#"><img src="images/icon-1.png" alt=""></a><a href="#"><img src="images/icon-2.png" alt=""></a><a href="#"><img src="images/icon-3.png" alt=""></a></div>
  </footer>	
</body>
</html>