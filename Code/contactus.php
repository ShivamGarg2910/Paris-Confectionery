
<!DOCTYPE HTML>
<html>
<head>
<!--<?php
			include('loginvarifier.php');
?>-->
<title>Paris Confectionary (<?php echo $login_session; ?>)</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <link rel="shortcut icon" href="images/hlogo.png"> 
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" href="css/imgeffect.css" />
<script src="js/jquery.min.js"></script>
<!-- start gallery Script -->
	<script type="text/javascript" src="js/jquery.easing.min.js"></script>	
	<script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
				<script type="text/javascript">
				$(function () {
					
					var filterList = {
					
						init: function () {
						
							// MixItUp plugin
							// http://mixitup.io
							$('#portfoliolist').mixitup({
								targetSelector: '.portfolio',
								filterSelector: '.filter',
								effects: ['fade'],
								easing: 'snap',
								// call the hover effect
								onMixEnd: filterList.hoverEffect()
							});				
						
						},
						
						hoverEffect: function () {
						
							// Simple parallax effect
							$('#portfoliolist .portfolio').hover(
								function () {
									$(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
									$(this).find('img').stop().animate({top: 0}, 500, 'easeOutQuad');				
								},
								function () {
									$(this).find('.label').stop().animate({bottom: 0}, 200, 'easeInQuad');
									$(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');								
								}		
							);				
						
						}
			
					};
					
					// Run the show!
					filterList.init();
					
					
				});	
				</script>
				<!-- Add fancyBox main JS and CSS files -->
				<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
				<link href="css/magnific-popup.css" rel="stylesheet" type="text/css">
						<script>
							$(document).ready(function() {
								$('.popup-with-zoom-anim').magnificPopup({
									type: 'inline',
									fixedContentPos: false,
									fixedBgPos: true,
									overflowY: 'auto',
									closeBtnInside: true,
									preloader: false,
									midClick: true,
									removalDelay: 300,
									mainClass: 'my-mfp-zoom-in'
							});
						});
						</script>
				<script type="text/javascript" src="js/move-top.js"></script>
				<script type="text/javascript" src="js/easing.js"></script>
				<!----end gallery----------->
				
		   	<script type="text/javascript">
				jQuery(document).ready(function($) {
					$(".scroll").click(function(event){		
						event.preventDefault();
						$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
					});
				});
			</script>
</head>

<body>
		
				<div class="header_bg">
					<div class="wrap">
						<div class="header">
							
							<div class="logo">
								<a href="home.php"><img src="images/logo.png" alt="" /></a>
							</div>	
							
							<div class="nav">
								<ul>
								   <!--<li><a href="#portfolio" class="scroll">Contents</a></li>
								   
								   <li><a href="#contact" class="scroll">Contact</a></li>-->
								   <li  class="active"><a href="login.html"><!--<?php echo "<b>Logout  </b>('.$login_session.')"; ?>-->Logout</a></li>
								   
								 <div class="clear"> </div>
								 </ul>
							</div>
							
							<div class="clear"> </div>
						</div>
					</div>
				</div>
		
	<div class="wrap" id="portfolio">
				<div class="main">
					
					
			<div class="gallery">
					<div class="clear"> </div>
					<div class="container">
						<h2> Paris Confectionary Shop</h2>
					<!--	
					<ul id="filters" class="clearfix">
						<li><span class="filter active" data-filter="app card icon logo web">Everything</span></li>
						<li><span class="filter" data-filter="app web">Lost Something?</span></li>
						<li><span class="filter" data-filter="icon web card">Found Something?</span></li>
						
					</ul>-->
			<div id="portfoliolist">
			<!--
			<div class="portfolio card" data-cat="logo">
				<div class="portfolio-wrapper">				
					<class="popup-with-zoom-anim" href="#small-dialog1">
						<ul class="ch-grid">
							<li>
								<div class="ch-item ch-img-1">
									<div class="ch-info">
										<img src="images/zoom-white.png"/>
                                        <a href="found.php"><h3>Found Something?</h3></a>										
									</div>
								</div>
							</li>
						</ul>
					</a>
				</div>
			</div> -->		
				
			<div class="portfolio app" data-cat="app">
			</div>	
            
				
			
			<div class="portfolio app" data-cat="card">
				<div class="portfolio-wrapper">			
					<class="popup-with-zoom-anim" href="#small-dialog1">
						<ul class="ch-grid">
							<li>
								<div class="ch-item ch-img-4">
									<div class="ch-info">
										<img src="images/zoom-white.png"/>
										<a href="lost.php"><h3>Inventory</h3></a>										
									</div>
								</div>
							</li>
						</ul>
					</a>
				</div>
			</div>	
				
			<div class="hide">	
			<div class="portfolio app" data-cat="app">
				<div class="portfolio-wrapper">
					<class="popup-with-zoom-anim" href="#small-dialog1">
						<ul class="ch-grid">
							<li>
								<div class="ch-item ch-img-5">
									<div class="ch-info">
										<img src="images/zoom-white.png"/>										
										<a href="#contact" class="scroll"><h3>Items</h3></a>
									</div>
								</div>
							</li>
						</ul>
					</a>
				</div>
			</div>	
			</div>	
			<div class="hide">
			<div class="portfolio card" data-cat="card">
				<div class="portfolio-wrapper">			
					<class="popup-with-zoom-anim" href="#small-dialog1">
						<ul class="ch-grid">
							<li>
								<div class="ch-item ch-img-6">
									<div class="ch-info">
										<img src="images/zoom-white.png"/>
										<a href="index.php"><h3>Best Before</h3></a>
										
									</div>
								</div>
							</li>
						</ul>
					</a>
				</div>
			</div>	
			</div>
			<div>
			<div class="portfolio card" data-cat="card">
				
			</div>	
			</div>
			<div>
			<div class="portfolio logo" data-cat="logo" id="hide">
				
			</div>																																							
		</div>
        <div class="hide">	
			<div class="portfolio web" data-cat="app">
				<div class="portfolio-wrapper">						
					<class="popup-with-zoom-anim" href="#small-dialog1">
						<ul class="ch-grid">
							<li>
								<div class="ch-item ch-img-3">
									<div class="ch-info">
										<img src="images/zoom-white.png"/>
										<a href="editprofile.php"><h3>Contact Us</h3></a>
										
									</div>
								</div>
							</li>
						</ul>
					</a>
				</div>
			</div>	
			</div>
		</div>
        
	</div><!-- container -->
	<script type="text/javascript" src="js/fliplightbox.min.js"></script>
	<script type="text/javascript">$('body').flipLightBox()</script>
	<div class="clear"> </div>
	</div>
	</div>
	</div>
</div>
<!---End-gallery----->
<!-----start-about-------->


<!---------end-about-------------
<div class="contact" id="contact">
	<div class="wrap">
		<h2>Contact Us</h2>
		
		<div class="section group">
			  <div class="col span_2_of_3">
				  <div class="contact-form">
                  <?php
				  	include('config.php');
					$query="Select *from usermaster where EmailID='{$login_session}'";
					$result=mysql_query($query) or die(mysql_error());
					while($row=mysql_fetch_array($result))
					{
					
				  ?>
				  	  <form method="post" action="contactus.php">
					    		<input type="text" readonly value="<?php echo $row['FirstName']; ?>" class="textbox" placeholder="Your Name" name="txtName"  required title="Your Name">
						    	<input type="text" readonly value="<?php echo $row['EmailID']; ?>" class="textbox" placeholder="Your Email Address" required name="txtEmail" title="Your Email Address">
                                						    	<div class="clear"> </div>
						   
						    <div>
                            <input type="text" class="textbox" placeholder="Subject" required name="txtSubject" title="Subject">

                            <br>
						    	<textarea placeholder="You Message" required name="txtMessage" title="You Message"></textarea>
						    </div>
						  <span><input type="submit" class="" value="Submit"></span>
						  <div class="clear"></div>
					    </form>
                        <?php
						}
						?>
				  </div>
  				</div>
				<div class="col span_1_of_3">
					<div class="company_address">
				     	<h5>ABOUT US</h5>
						<ul class="list3">
							<li>
								<img src="images/location.png" alt=""/>
								<div class="extra-wrap">
								  <p>Dharmsinh Desai University</p>
								  <p>Nadiad 387-001</p>
								  <p>Gujarat</p>
								</div>
								<div class="clear"> </div>
							</li>
							
							<li>
								<img src="images/phone.png" alt=""/>
								<div class="extra-wrap">
									<p>(0268) 2520503</p>
								</div>
								<div class="clear"> </div>
							</li>
							<li>
								<img src="images/fax2.png" alt=""/>
								<div class="extra-wrap">
									<p>(0268) 2520501</p>
								</div>
								<div class="clear"> </div>
							</li>
							<li>
								<img src="images/mail.png" alt=""/>
								<div class="extra-wrap">
									<p> <a href="http://www.ddu.ac.in"> Official Website</a></p>
								</div>
								<div class="clear"> </div>
							</li>
						</ul>
				   </div>
				 </div>
				 <div class="clear"></div>
			  </div>
			  </div>
     	</div> -->
		<div class="hide">	
			<div class="portfolio web" data-cat="app">
				<div class="portfolio-wrapper">						
					<class="popup-with-zoom-anim" href="#small-dialog1">
						<ul class="ch-grid">
							<li>
								<div class="ch-item ch-img-10">
									<div class="ch-info">
										<!--<img src="images/zoom-white.png"/>-->
										<h3 style="text-align:center">Amit</h3>
										
									</div>
								</div>
							</li>
							<h3>Amit Redhu</h3>
							<p>E-mail ID:- amit.redhu2015@gmail.com</p>
							<p> hone No - 1234567895 </p>
						</ul>
					<!--</a>-->
					
				</div>
				
			</div>
					
			</div>
     <div class="footer-bottom">
     	<div class="wrap">
        <div class="copy">
		    <p class="copy"><font color="white"  size="4">Developed by - Team 10</font></p>
		</div>
		<script type="text/javascript">
							$(document).ready(function() {
								
								var defaults = {
						  			containerID: 'toTop', // fading element id
									containerHoverID: 'toTopHover', // fading element hover id
									scrollSpeed: 1200,
									easingType: 'linear' 
						 		};
								
								
								$().UItoTop({ easingType: 'easeOutQuart' });
								
							});
						</script>
		 <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"> </span></a>
		 <script src="js/jquery.scrollTo.js"></script>
		</div>
	</div>
</body>
</html>