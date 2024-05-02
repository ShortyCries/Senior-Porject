<?php
session_start();
require_once("config.php");
$pdo = new PDO(DBCONNSTRING, DBUSER, DBPASS);
$academyEmail = $_SESSION['email'];

$query = "SELECT name, email FROM academy ";

$result = $pdo->query($query);

$r = $result->rowCount();


?>
	<!DOCTYPE html>
	<html lang="zxx" class="no-js">

	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Travel</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
		<!--
			CSS
			============================================= -->
		<link rel="stylesheet" href="css/linearicons.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/magnific-popup.css">
		<link rel="stylesheet" href="css/jquery-ui.css">
		<link rel="stylesheet" href="css/nice-select.css">
		<link rel="stylesheet" href="css/animate.min.css">
		<link rel="stylesheet" href="css/owl.carousel.css">
		<link rel="stylesheet" href="css/main.css">
	</head>

	<body>

		<header id="header">
			<div class="header-top">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-6 col-sm-6 col-6 header-top-left">
						</div>
						<div class="col-lg-6 col-sm-6 col-6 header-top-right">
							<div class="header-social">
								<a href="https://www.facebook.com/profile.php?id=100072237932656" target="_blank"><i class="fa fa-facebook"></i></a>
								<a href="https://www.instagram.com/mhmdkhalil_._/" target="_blank"><i class="fa fa-instagram"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container main-menu">
				<div class="row align-items-center justify-content-between d-flex">
					<div id="logo">
						<a href="index.php"><img style="height: 30px; width: 145px;" src="img/2-1.png" alt="" title="" /></a>
						
					</div>
					<p style="border-left: solid; padding-left: 30px;" class="u-align-center u-text u-text-default u-text-1"><?php echo "" . $_SESSION['name'] . "" ?></p>
					
					<nav id="nav-menu-container">
						<ul class="nav-menu">
							<li><a href="index.php">Home</a></li>
							
							<li><a href="#" onclick="logoutAlert()">Logout</a></li>
							<li><a href="about.php">About us</a></li>
							<li class="menu-has-children"><a href="">Contact</a>
								<ul>
									<li><a href="blog-home.php">Blog Home</a></li>

								</ul>
							</li>

							<ul>
								<li><a href="elements.php">Elements</a></li>
								<li class="menu-has-children"><a href="">Level 2 </a>
									<ul>
										<li><a href="#">Item One</a></li>
										<li><a href="#">Item Two</a></li>
									</ul>
								</li>
							</ul>
							</li>
							<li><a href="contact.php">Contact</a></li>
						</ul>
					</nav><!-- #nav-menu-container -->

				</div>
			</div>
		</header><!-- #header -->


		<!-- start banner Area -->
		<section class="about-banner relative">
			<div class="overlay overlay-bg"></div>
			<div class="container">
				<div class="row d-flex align-items-center justify-content-center">
					<div class="about-content col-lg-12">
						<h1 class="text-white">
							About Us
						</h1>
						<p class="text-white link-nav"><a href="index.php">Home </a> <span class="lnr lnr-arrow-right"></span> <a href="about.php"> About Us</a></p>
					</div>
				</div>
			</div>
		</section>
		<!-- End banner Area -->

		<!-- Start about-info Area -->
		<section class="about-info-area section-gap">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6 info-left">
						<img class="img-fluid" src="img/about/info-img.jpg" alt="">
					</div>
					<div class="col-lg-6 info-right">
						<h6>About Us</h6>
						<h1></h1>
						<p></p>
					</div>
				</div>
			</div>
		</section>
		<!-- End about-info Area -->

		<!-- Start price Area -->

		<!-- End price Area -->


		<!-- Start other-issue Area -->

		<!-- End other-issue Area -->

		<!-- Start testimonial Area -->
		<section class="testimonial-area section-gap">
			<div class="container">
				<div class="row d-flex justify-content-center">
					<div class="menu-content pb-70 col-lg-8">
						<div class="title text-center">
							<h1 class="mb-10">Testimonial from our Clients</h1>
							<p> </p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="active-testimonial">
						<div class="single-testimonial item d-flex flex-row">
							<div class="thumb">
								<img class="img-fluid" src="img/elements/user1.png" alt="">
							</div>
							<div class="desc">
								<p>
									Do you want to be even more successful? Learn to love learning and growth. The more effort you put into improving your skills, the bigger the payoff you.
								</p>
								<h4>Harriet Maxwell</h4>
								<div class="star">
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star"></span>
								</div>
							</div>
						</div>
						<div class="single-testimonial item d-flex flex-row">
							<div class="thumb">
								<img class="img-fluid" src="img/elements/user2.png" alt="">
							</div>
							<div class="desc">
								<p>
									A purpose is the eternal condition for success. Every former smoker can tell you just how hard it is to stop smoking cigarettes. However.
								</p>
								<h4>Carolyn Craig</h4>
								<div class="star">
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
								</div>
							</div>
						</div>
						<div class="single-testimonial item d-flex flex-row">
							<div class="thumb">
								<img class="img-fluid" src="img/elements/user1.png" alt="">
							</div>
							<div class="desc">
								<p>
									Do you want to be even more successful? Learn to love learning and growth. The more effort you put into improving your skills, the bigger the payoff you.
								</p>
								<h4>Harriet Maxwell</h4>
								<div class="star">
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star"></span>
								</div>
							</div>
						</div>
						<div class="single-testimonial item d-flex flex-row">
							<div class="thumb">
								<img class="img-fluid" src="img/elements/user2.png" alt="">
							</div>
							<div class="desc">
								<p>
									A purpose is the eternal condition for success. Every former smoker can tell you just how hard it is to stop smoking cigarettes. However.
								</p>
								<h4>Carolyn Craig</h4>
								<div class="star">
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
								</div>
							</div>
						</div>
						<div class="single-testimonial item d-flex flex-row">
							<div class="thumb">
								<img class="img-fluid" src="img/elements/user1.png" alt="">
							</div>
							<div class="desc">
								<p>
									Do you want to be even more successful? Learn to love learning and growth. The more effort you put into improving your skills, the bigger the payoff you.
								</p>
								<h4>Harriet Maxwell</h4>
								<div class="star">
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star"></span>
								</div>
							</div>
						</div>
						<div class="single-testimonial item d-flex flex-row">
							<div class="thumb">
								<img class="img-fluid" src="img/elements/user2.png" alt="">
							</div>
							<div class="desc">
								<p>
									A purpose is the eternal condition for success. Every former smoker can tell you just how hard it is to stop smoking cigarettes. However.
								</p>
								<h4>Carolyn Craig</h4>
								<div class="star">
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End testimonial Area -->
		<script>
			function logoutAlert() {
				// Show the confirmation dialog and store the result
				var result = window.confirm("Are you sure you want to Logout?");

				// Check if the user clicked "OK" or "Cancel"
				if (result) {
					// If the user clicked "OK", redirect to 'index.php'
					window.location.href = 'logout.php';
				} else {
					// If the user clicked "Cancel", do nothing or perform any other action
					return;
				}
			}
		</script>
		<!-- start footer Area -->
		<footer class="footer-area section-gap">
			<div class="container">

				<div class="row">
					<div class="col-lg-3  col-md-6 col-sm-6">
						<div class="single-footer-widget">
							<h6>About Agency</h6>
							<p>
								The world has become so fast paced that people don’t want to stand by reading a page of information, they would much rather look at a presentation and understand the message. It has come to a point
							</p>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="single-footer-widget">
							<h6>Navigation Links</h6>
							<div class="row">
								<div class="col">
									<ul>
										<li><a href="#">Home</a></li>
										<li><a href="#">Feature</a></li>
										<li><a href="#">Services</a></li>
										<li><a href="#">Portfolio</a></li>
									</ul>
								</div>
								<div class="col">
									<ul>
										<li><a href="#">Team</a></li>
										<li><a href="#">Pricing</a></li>
										<li><a href="#">Blog</a></li>
										<li><a href="#">Contact</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3  col-md-6 col-sm-6">
						<div class="single-footer-widget">
							<h6>Newsletter</h6>
							<p>
								For business professionals caught between high OEM price and mediocre print and graphic output.
							</p>
							<div id="mc_embed_signup">
								<form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscription relative">
									<div class="input-group d-flex flex-row">
										<input name="EMAIL" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '" required="" type="email">
										<button class="btn bb-btn"><span class="lnr lnr-location"></span></button>
									</div>
									<div class="mt-10 info"></div>
								</form>
							</div>
						</div>
					</div>
					<div class="col-lg-3  col-md-6 col-sm-6">
						<div class="single-footer-widget mail-chimp">
							<h6 class="mb-20">InstaFeed</h6>
							<ul class="instafeed d-flex flex-wrap">
								<li><img src="img/i1.jpg" alt=""></li>
								<li><img src="img/i2.jpg" alt=""></li>
								<li><img src="img/i3.jpg" alt=""></li>
								<li><img src="img/i4.jpg" alt=""></li>
								<li><img src="img/i5.jpg" alt=""></li>
								<li><img src="img/i6.jpg" alt=""></li>
								<li><img src="img/i7.jpg" alt=""></li>
								<li><img src="img/i8.jpg" alt=""></li>
							</ul>
						</div>
					</div>
				</div>

				<div class="row footer-bottom d-flex justify-content-between align-items-center">
					<p class="col-lg-8 col-sm-12 footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						Copyright &copy;<script>
							document.write(new Date().getFullYear());
						</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
					<div class="col-lg-4 col-sm-12 footer-social">
						<a href="https://www.facebook.com/profile.php?id=100072237932656" target="_blank"><i class="fa fa-facebook"></i></a>
						<a href="https://www.instagram.com/mhmdkhalil_._/" target="_blank"><i class="fa fa-instagram"></i></a>
					</div>
				</div>
			</div>
		</footer>
		<!-- End footer Area -->

		<script src="js/vendor/jquery-2.2.4.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/vendor/bootstrap.min.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
		<script src="js/jquery-ui.js"></script>
		<script src="js/easing.min.js"></script>
		<script src="js/hoverIntent.js"></script>
		<script src="js/superfish.min.js"></script>
		<script src="js/jquery.ajaxchimp.min.js"></script>
		<script src="js/jquery.magnific-popup.min.js"></script>
		<script src="js/jquery.nice-select.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/mail-script.js"></script>
		<script src="js/main.js"></script>
	</body>

	</html>