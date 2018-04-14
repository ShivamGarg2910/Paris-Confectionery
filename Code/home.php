<!DOCTYPE HTML>
<html>
<head>
<title>Paris Confectionary: Home (<?php echo $login_session; ?>)</title>
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
<?php
if($conn=mysqli_connect("localhost","root","","paris_confectionary_shop"))
{
    //echo " connection successful";
}
else{
	echo "unsuccessful";
}

// please put the following code into a web service and pop it in a box on home.php as soon as we login if any.
//$startdate=Date('Y-m-d');
//$sql1="select * from inventory where expiry_date<='$startdate'";
//$sql="delete from inventory where expiry_date<='$startdate'";
//$result1=mysqli_query($conn,$sql1);
//$result=mysqli_query($conn,$sql);		
// till this line 
// above code is to delete expired products;
// uncomment them @guaravjit
// sql1 will return 1 row, so 1 box;
?>
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

			<div id="portfoliolist">
				
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
										<a href="http://localhost/Project/inventory1.php"><h3>Inventory</h3></a>										
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
										<a href="http://localhost/Project/item.php" ><h3>Items</h3></a>
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
										<a href="http://localhost/Project/best_before.php"><h3>Best Before</h3></a>
										
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
										<a href="contactus.php"><h3>Contact Us</h3></a>
										
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