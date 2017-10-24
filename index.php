<!doctype html>
<html>
<?php
session_start();
if(!isset($_SESSION['message'])){
	$_SESSION['message']='';
}
if(!isset($_SESSION['type'])){
	$_SESSION['type']='';
}
include ('bin/functions.php');
ini_set('display_errors','On');
error_reporting(E_ALL);
if (isset($_SESSION['logged'])) {
	$disabled = 'active';
	$regVisible = 'hidden';
} else {
	$disabled = 'disabled';
	$regVisible = 'visible';
}
?>
<?php include('modal.php');?> 
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, maximum-scale=1">

	<title>Homepage</title>
	<link rel="icon" href="favicon.png" type="image/png">
	<link rel="shortcut icon" href="favicon.ico" type="img/x-icon">

	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,800italic,700italic,600italic,400italic,300italic,800,700,600' rel='stylesheet' type='text/css'>

	<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<link href="css/font-awesome.css" rel="stylesheet" type="text/css">
	<link href="css/responsive.css" rel="stylesheet" type="text/css">
	<link href="css/animate.css" rel="stylesheet" type="text/css">

	<script type="text/javascript" src="js/jquery.1.8.3.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/jquery-scrolltofixed.js"></script>
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="js/jquery.isotope.js"></script>
	<script type="text/javascript" src="js/wow.js"></script>
	<script type="text/javascript" src="js/classie.js"></script>
	<script type="text/javascript" src="js/jquery.bootstrap-growl.js"></script>
	<script src="contactform/contactform.js"></script>

</head>

<body>
	<header class="header" id="header">
		
		<div class="container">
			<figure class="logo animated fadeInDown delay-07s">
				<a href="#"><img src="img/logo.png" alt=""></a>
			</figure>
			<h1 class="animated fadeInDown delay-07s">Welcome To Knight Studios</h1>
			<ul class="we-create animated fadeInUp delay-1s">
				<li>We are a digital agency that loves crafting beautiful websites.</li>
			</ul>
			<a class="link animated fadeInUp delay-1s servicelink" href="#service">Get Started</a>
		</div>
	</header>

	<nav class="main-nav-outer" id="test">
		<!--main-nav-start-->
		<div class="container">
			<ul class="main-nav">
				<li><a href="#service">Home</a></li>
				<li><a href="#service">Services</a></li>
				<li><a href="#Portfolio">Portfolio</a></li>
				<li class="small-logo"><a href="#service"><img src="img/small-logo.png" alt=""></a></li>
				<li><a href="#client">Clients</a></li>
				<li><a href="#team">Team</a></li>
				<li><a href="#contact">Contact</a></li>
				<li id="login">
					<?php
					if ($disabled == 'disabled') {
						echo '<a  data-toggle="modal" data-target="#regModal" href="#">Log-In</a>';
						
					} else {
						echo '<a href="#" onclick="logout()">Esci</a>';
					}
					?>
				</li>
			</ul>
			<a class="res-nav_click" href="#"><i class="fa-bars"></i></a>
		</div>
	</nav>
	<!--main-nav-end-->



	<section class="main-section" id="service">
		<!--main-section-start-->
		<div class="container">
			<h2>Services</h2>
			<h6>We offer exceptional service with complimentary hugs.</h6>
			<div class="row">
				<div class="col-lg-4 col-sm-6 wow fadeInLeft delay-05s">
					<div class="service-list">
						<div class="service-list-col1">
							<i class="fa-paw"></i>
						</div>
						<div class="service-list-col2">
							<h3>branding &amp; identity</h3>
							<p>Proin iaculis purus digni consequat sem digni ssim. Donec entum digni ssim.</p>
						</div>
					</div>
					<div class="service-list">
						<div class="service-list-col1">
							<i class="fa-gear"></i>
						</div>
						<div class="service-list-col2">
							<h3>web development</h3>
							<p>Proin iaculis purus consequat sem digni ssim. Digni ssim porttitora .</p>
						</div>
					</div>
					<div class="service-list">
						<div class="service-list-col1">
							<i class="fa-apple"></i>
						</div>
						<div class="service-list-col2">
							<h3>mobile design</h3>
							<p>Proin iaculis purus consequat digni sem digni ssim. Purus donec porttitora entum.</p>
						</div>
					</div>
					<div class="service-list">
						<div class="service-list-col1">
							<i class="fa-medkit"></i>
						</div>
						<div class="service-list-col2">
							<h3>24/7 Support</h3>
							<p>Proin iaculis purus consequat sem digni ssim. Sem porttitora entum.</p>
						</div>
					</div>
				</div>
				<figure class="col-lg-8 col-sm-6  text-right wow fadeInUp delay-02s">
					<img src="img/macbook-pro.png" alt="">
				</figure>

			</div>
		</div>
	</section>
	<!--main-section-end-->



	<section class="main-section alabaster">
		<!--main-section alabaster-start-->
		<div class="container">
			<div class="row">
				<figure class="col-lg-5 col-sm-4 wow fadeInLeft">
					<img src="img/iphone.png" alt="">
				</figure>
				<div class="col-lg-7 col-sm-8 featured-work">
					<h2>featured work</h2>
					<P class="padding-b">Proin iaculis purus consequat sem cure digni ssim. Donec porttitora entum suscipit aenean rhoncus posuere odio in tincidunt. Proin iaculis purus consequat sem cure digni ssim. Donec porttitora entum suscipit.</P>
					<div class="featured-box">
						<div class="featured-box-col1 wow fadeInRight delay-02s">
							<i class="fa-magic"></i>
						</div>
						<div class="featured-box-col2 wow fadeInRight delay-02s">
							<h3>magic of theme development</h3>
							<p>Proin iaculis purus consequat sem cure digni ssim. Donec porttitora entum suscipit aenean rhoncus posuere odio in tincidunt. </p>
						</div>
					</div>
					<div class="featured-box">
						<div class="featured-box-col1 wow fadeInRight delay-04s">
							<i class="fa-gift"></i>
						</div>
						<div class="featured-box-col2 wow fadeInRight delay-04s">
							<h3>neatly packaged</h3>
							<p>Proin iaculis purus consequat sem cure digni ssim. Donec porttitora entum suscipit aenean rhoncus posuere odio in tincidunt. </p>
						</div>
					</div>
					<div class="featured-box">
						<div class="featured-box-col1 wow fadeInRight delay-06s">
							<i class="fa-dashboard"></i>
						</div>
						<div class="featured-box-col2 wow fadeInRight delay-06s">
							<h3>SEO optimized</h3>
							<p>Proin iaculis purus consequat sem cure digni ssim. Donec porttitora entum suscipit aenean rhoncus posuere odio in tincidunt. </p>
						</div>
					</div>
					<a class="Learn-More" href="#">Learn More</a>
				</div>
			</div>
		</div>
	</section>
	<!--main-section alabaster-end-->



	<section class="main-section paddind" id="Portfolio">
		<!--main-section-start-->
		<div class="container">
			<h2>Portfolio</h2>
			<h6>Fresh portfolio of designs that will keep you wanting more.</h6>
			<div class="portfolioFilter">
				<ul class="Portfolio-nav wow fadeIn delay-02s">
					<li><a href="#" data-filter="*" class="current">All</a></li>
					<li><a href="#" data-filter=".branding">Branding</a></li>
					<li><a href="#" data-filter=".webdesign">Web design</a></li>
					<li><a href="#" data-filter=".printdesign">Print design</a></li>
					<li><a href="#" data-filter=".photography">Photography</a></li>
				</ul>
			</div>

		</div>
		<div class="portfolioContainer wow fadeInUp delay-04s">
			<div class=" Portfolio-box printdesign">
				<a href="#"><img src="img/Portfolio-pic1.jpg" alt=""></a>
				<h3>Foto Album</h3>
				<p>Print Design</p>
			</div>
			<div class="Portfolio-box webdesign">
				<a href="#"><img src="img/Portfolio-pic2.jpg" alt=""></a>
				<h3>Luca Theme</h3>
				<p>Web Design</p>
			</div>
			<div class=" Portfolio-box branding">
				<a href="#"><img src="img/Portfolio-pic3.jpg" alt=""></a>
				<h3>Uni Sans</h3>
				<p>Branding</p>
			</div>
			<div class=" Portfolio-box photography">
				<a href="#"><img src="img/Portfolio-pic4.jpg" alt=""></a>
				<h3>Vinyl Record</h3>
				<p>Photography</p>
			</div>
			<div class=" Portfolio-box branding">
				<a href="#"><img src="img/Portfolio-pic5.jpg" alt=""></a>
				<h3>Hipster</h3>
				<p>Branding</p>
			</div>
			<div class=" Portfolio-box photography">
				<a href="#"><img src="img/Portfolio-pic6.jpg" alt=""></a>
				<h3>Windmills</h3>
				<p>Photography</p>
			</div>
		</div>
	</section>
	<!--main-section-end-->


	<section class="main-section client-part" id="client">
		<!--main-section client-part-start-->
		<div class="container">
			<b class="quote-right wow fadeInDown delay-03"><i class="fa-quote-right"></i></b>
			<div class="row">
				<div class="col-lg-12">
					<p class="client-part-haead wow fadeInDown delay-05">It was a pleasure to work with the guys at Knight Studio. They made sure we were well fed and drunk all the time!</p>
				</div>
			</div>
			<ul class="client wow fadeIn delay-05s">
				<li><a href="#">
            	<img src="img/client-pic1.jpg" alt="">
                <h3>James Bond</h3>
                <span>License To Drink Inc.</span>
            </a></li>
			</ul>
		</div>
	</section>
	<!--main-section client-part-end-->
	<div class="c-logo-part">
		<!--c-logo-part-start-->
		<div class="container">
			<ul>
				<li><a href="#"><img src="img/c-liogo1.png" alt=""></a></li>
				<li><a href="#"><img src="img/c-liogo2.png" alt=""></a></li>
				<li><a href="#"><img src="img/c-liogo3.png" alt=""></a></li>
				<li><a href="#"><img src="img/c-liogo4.png" alt=""></a></li>
				<li><a href="#"><img src="img/c-liogo5.png" alt=""></a></li>
			</ul>
		</div>
	</div>
	<!--c-logo-part-end-->
	<section class="main-section team" id="team">
		<!--main-section team-start-->
		<div class="container">
			<h2>team</h2>
			<h6>Take a closer look into our amazing team. We won’t bite.</h6>
			<div class="team-leader-block clearfix">
				<div class="team-leader-box">
					<div class="team-leader wow fadeInDown delay-03s">
						<div class="team-leader-shadow"><a href="#"></a></div>
						<img src="img/team-leader-pic1.jpg" alt="">
						<ul>
							<li><a href="#" class="fa-twitter"></a></li>
							<li><a href="#" class="fa-facebook"></a></li>
							<li><a href="#" class="fa-pinterest"></a></li>
							<li><a href="#" class="fa-google-plus"></a></li>
						</ul>
					</div>
					<h3 class="wow fadeInDown delay-03s">Walter White</h3>
					<span class="wow fadeInDown delay-03s">Chief Executive Officer</span>
					<p class="wow fadeInDown delay-03s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus. Dolor sit amet, consectetur adipiscing elit proin consequat.</p>
				</div>
				<div class="team-leader-box">
					<div class="team-leader  wow fadeInDown delay-06s">
						<div class="team-leader-shadow"><a href="#"></a></div>
						<img src="img/team-leader-pic2.jpg" alt="">
						<ul>
							<li><a href="#" class="fa-twitter"></a></li>
							<li><a href="#" class="fa-facebook"></a></li>
							<li><a href="#" class="fa-pinterest"></a></li>
							<li><a href="#" class="fa-google-plus"></a></li>
						</ul>
					</div>
					<h3 class="wow fadeInDown delay-06s">Jesse Pinkman</h3>
					<span class="wow fadeInDown delay-06s">Product Manager</span>
					<p class="wow fadeInDown delay-06s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus. Dolor sit amet, consectetur adipiscing elit proin consequat.</p>
				</div>
				<div class="team-leader-box">
					<div class="team-leader wow fadeInDown delay-09s">
						<div class="team-leader-shadow"><a href="#"></a></div>
						<img src="img/team-leader-pic3.jpg" alt="">
						<ul>
							<li><a href="#" class="fa-twitter"></a></li>
							<li><a href="#" class="fa-facebook"></a></li>
							<li><a href="#" class="fa-pinterest"></a></li>
							<li><a href="#" class="fa-google-plus"></a></li>
						</ul>
					</div>
					<h3 class="wow fadeInDown delay-09s">Skyler white</h3>
					<span class="wow fadeInDown delay-09s">Accountant</span>
					<p class="wow fadeInDown delay-09s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus. Dolor sit amet, consectetur adipiscing elit proin consequat.</p>
				</div>
			</div>
		</div>
	</section>
	<!--main-section team-end-->



	<section class="business-talking">
		<!--business-talking-start-->
		<div class="container">
			<h2>Let’s Talk Business.</h2>
		</div>
	</section>
	<!--business-talking-end-->
	<div class="container">
		<section class="main-section contact" id="contact">

			<div class="row">
				<div class="col-lg-6 col-sm-7 wow fadeInLeft">
					<div class="contact-info-box address clearfix">
						<h3><i class=" icon-map-marker"></i>Address:</h3>
						<span>308 Negra Arroyo Lane<br>Albuquerque, New Mexico, 87111.</span>
					</div>
					<div class="contact-info-box phone clearfix">
						<h3><i class="fa-phone"></i>Phone:</h3>
						<span>1-800-BOO-YAHH</span>
					</div>
					<div class="contact-info-box email clearfix">
						<h3><i class="fa-pencil"></i>email:</h3>
						<span>hello@knightstudios.com</span>
					</div>
					<div class="contact-info-box hours clearfix">
						<h3><i class="fa-clock-o"></i>Hours:</h3>
						<span><strong>Monday - Thursday:</strong> 10am - 6pm<br><strong>Friday:</strong> People work on Fridays now?<br><strong>Saturday - Sunday:</strong> Best not to ask.</span>
					</div>
					<ul class="social-link">
						<li class="twitter"><a href="#"><i class="fa-twitter"></i></a></li>
						<li class="facebook"><a href="#"><i class="fa-facebook"></i></a></li>
						<li class="pinterest"><a href="#"><i class="fa-pinterest"></i></a></li>
						<li class="gplus"><a href="#"><i class="fa-google-plus"></i></a></li>
						<li class="dribbble"><a href="#"><i class="fa-dribbble"></i></a></li>
					</ul>
				</div>
				<div class="col-lg-6 col-sm-5 wow fadeInUp delay-05s">
					<div class="form">

						<div id="sendmessage">Your message has been sent. Thank you!</div>
						<div id="errormessage"></div>
						<form action="" method="post" role="form" class="contactForm">
							<div class="form-group">
								<input type="text" name="name" class="form-control input-text" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
								<div class="validation"></div>
							</div>
							<div class="form-group">
								<input type="email" class="form-control input-text" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
								<div class="validation"></div>
							</div>
							<div class="form-group">
								<input type="text" class="form-control input-text" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
								<div class="validation"></div>
							</div>
							<div class="form-group">
								<textarea class="form-control input-text text-area" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
								<div class="validation"></div>
							</div>

							<div class="text-center"><button type="submit" class="input-btn">Send Message</button></div>
						</form>
					</div>
				</div>
			</div>
		</section>
	</div>
	<footer class="footer">
		<div class="container">
			<div class="footer-logo"><a href="#"><img src="img/footer-logo.png" alt=""></a></div>
			<span class="copyright">&copy; Knight Theme. All Rights Reserved</span>
			<div class="credits">
				<!--
          All the links in the footer should remain intact. 
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Knight
        -->
				<a href="https://bootstrapmade.com/bootstrap-agency-templates/">Bootstrap Agency Templates</a> by <a href="https://bootstrapmade.com/">BootstrapMade</a>
			</div>
		</div>
	</footer>


	<script type="text/javascript">
		$(document).ready(function(e) {
			$('#test').scrollToFixed();
			$('.res-nav_click').click(function() {
				$('.main-nav').slideToggle();
				return false

			});

		});
	</script>

	<script>
		wow = new WOW({
			animateClass: 'animated',
			offset: 100
		});
		wow.init();
	</script>


	<script type="text/javascript">
		$(window).load(function() {

			$('.main-nav li a, .servicelink').bind('click', function(event) {
				var $anchor = $(this);

				$('html, body').stop().animate({
					scrollTop: $($anchor.attr('href')).offset().top - 102
				}, 1500, 'easeInOutExpo');
				/*
				if you don't want to use the easing effects:
				$('html, body').stop().animate({
					scrollTop: $($anchor.attr('href')).offset().top
				}, 1000);
				*/
				if ($(window).width() < 768) {
					$('.main-nav').hide();
				}
				event.preventDefault();
			});
		});
	</script>

	<script type="text/javascript">
		$(window).load(function() {


			var $container = $('.portfolioContainer'),
				$body = $('body'),
				colW = 375,
				columns = null;


			$container.isotope({
				// disable window resizing
				resizable: true,
				masonry: {
					columnWidth: colW
				}
			});

			$(window).smartresize(function() {
				// check if columns has changed
				var currentColumns = Math.floor(($body.width() - 30) / colW);
				if (currentColumns !== columns) {
					// set new column count
					columns = currentColumns;
					// apply width to container manually, then trigger relayout
					$container.width(columns * colW)
						.isotope('reLayout');
				}

			}).smartresize(); // trigger resize to set container width
			$('.portfolioFilter a').click(function() {
				$('.portfolioFilter .current').removeClass('current');
				$(this).addClass('current');

				var selector = $(this).attr('data-filter');
				$container.isotope({

					filter: selector,
				});
				return false;
			});

		});
		
		$(document).ready(function(){
				var message = "<?php echo($_SESSION['message']); ?>";
				var type = "<?php echo($_SESSION['type']); ?>";
				var news = "<?php if(isset($_SESSION['news']))echo($_SESSION['news']); ?>";
							
				//alert(message + " "+ type)
				growl(message,type);
				<?php $_SESSION['message']=""; ?>
			}
		);
		function growl(msg,type){
			if(msg != ''){
				$.bootstrapGrowl(msg, {
				  ele: 'body', // which element to append to
				  type: type, // (null, 'info', 'danger', 'success')
				  offset: {from: 'top', amount: 70}, // 'top', or 'bottom'
				  align: 'right', // ('left', 'right', or 'center')
				  width: 250, // (integer, or 'auto')
				  delay: 4000,
				  allow_dismiss: false,
				  stackup_spacing: 10 // spacing between consecutively stacked growls.
				});
			}
		}
		function logout() {
			$.ajax({
				type : "POST",
				url : "bin/logout.php",
				data : "",
				success : function(msg) {
					location.reload();
				}
			});
		}
	</script>

</body>

</html>
