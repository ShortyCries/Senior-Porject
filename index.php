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
		<title>FIELD FRENZY</title>

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
					<div id="logo" style="height: 30px; width: 145px;">
						<a href="index.php"><img style="height: 30px; width: 145px;" src="img/2-1.png" alt="" title="" /></a>
					</div>
					<nav id="nav-menu-container">
						<ul class="nav-menu">
							<li><a href="index.php">Home</a></li>
							<li><a href="about.php">About us</a></li>
							<li></li>
							<li></li>

							<li><a href="contact.php">Contact</a></li>
						</ul>
					</nav><!-- #nav-menu-container -->
				</div>
			</div>
		</header><!-- #header -->

		<!-- start banner Area -->
		<section class="banner-area relative">
			<div class="overlay overlay-bg"></div>
			<div class="container">
				<div class="row fullscreen align-items-center justify-content-between">
					<div class="col-lg-6 col-md-6 banner-left">
						<h6 class="text-white">FINDING GAMES TO PLAY IS MUCH EASIER USING : </h6>
						<h1 class="text-white">FieldFrenzy</h1>
						<p class="text-white">
							FIELDFRENZY is your one-stop destination for booking courts across a variety of sports, from tennis and basketball to volleyball and others. With easy-to-use scheduling tools and real-time availability updates, finding and reserving the perfect court for your game has never been simpler.
						</p>
						<a href="Login.php" class="primary-btn text-uppercase">Already have an account?</a>
					</div>

					<div class="col-lg-4 col-md-6 banner-right">
						<ul class="nav nav-tabs" id="myTab" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" id="player-tab" data-toggle="tab" href="#player" role="tab" aria-controls="player" aria-selected="true">Player</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="academy-tab" data-toggle="tab" href="#academy" role="tab" aria-controls="academy" aria-selected="false">Academy</a>
							</li>
						</ul>
						<div class="tab-content" id="myTabContent">
							<div class="tab-pane fade show active" id="player" role="tabpanel" aria-labelledby="player-tab">
								<form class="form-wrap" action="PlayerPDO.php" method="post" onsubmit="return validateForm()">
									<input type="text" id="Pemail" class="form-control" name="email" placeholder="Email " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email '" required>
									<input type="text" id="Pname" class="form-control" name="name" placeholder="Name " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Name '" required>
									<input type="text" id="Pdob" class="form-control date-picker" name="Dob" placeholder="Date of birth" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Date of birth'" required>
									<input type="password" id="Ppassword" class="form-control" name="password" placeholder="Password " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password '" required>
									<input type="password" id="Prepassword" class="form-control" name="re-password" placeholder="Re-password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Re-password'" required>
									<button type="submit" href="#" class="primary-btn text-uppercase">Register</button>
								</form>
							</div>
							<div class="tab-pane fade" id="academy" role="tabpanel" aria-labelledby="academy-tab">
								<form class="form-wrap" action="AcademyPDO.php" method="post" onsubmit="return wowowow()">
									<input type="text" id="Aemail" class="form-control" name="email" placeholder="Email " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email '" required>
									<input type="text" id="Aname" class="form-control" name="name" placeholder="Name " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Name '" required>
									<input type="text" id="AfoundedIN" class="form-control date-picker" name="foundedIn" placeholder="Founded In " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Founded In '" required>
									<input type="password" id="Apassword" class="form-control" name="password" placeholder="Password " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password '" required>
									<input type="password" id="Arepassword" class="form-control" name="re-password" placeholder="Re-password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Re-password'" required>
									<button type="submit" href="#" class="primary-btn text-uppercase">Register</button>
								</form>
							</div>
						</div>
					</div>


				</div>
			</div>
		</section>
		<script>
			function validateForm() {
				var email = document.getElementById("Pemail").value;
				var name = document.getElementById("Pname").value;
				var dob = document.getElementById("Pdob").value;
				var password = document.getElementById("Ppassword").value;
				var rePassword = document.getElementById("Prepassword").value;

				// Email format validation
				var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
				if (!emailRegex.test(email)) {
					alert("Please enter a valid email address");
					return false;
				}

				// Password complexity validation
				var passwordRegex = /^(?=.*[A-Z])(?=.*\d).{8,}$/;
				if (!passwordRegex.test(password)) {
					alert("Password must contain at least one uppercase letter, one number, and be at least 8 characters long");
					return false;
				}

				// Password matching validation
				if (password !== rePassword) {
					alert("Passwords do not match");
					return false;
				}

				return true; // Form submission will proceed if all validations pass
			}
		</script>

		<script>
			function wowowow() {



				var Aemail = document.getElementById("Aemail").value;
				var Apassword = document.getElementById("Apassword").value;
				var ArePassword = document.getElementById("Arepassword").value;

				// Email format validation
				var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
				if (!emailRegex.test(Aemail)) {
					alert("Please enter a valid email address");
					return false;
				}

				// Password complexity validation
				var passwordRegex = /^(?=.*[A-Z])(?=.*\d).{8,}$/;
				if (!passwordRegex.test(Apassword)) {
					alert("Password must contain at least one uppercase letter, one number, and be at least 8 characters long");
					return false;
				}

				// Password matching validation
				if (Apassword !== ArePassword) {
					alert("Passwords do not match");
					return false;
				}

				return true; // Form submission will proceed if all validations pass
			}
		</script>













		<section class="other-issue-area section-gap">
			<div class="container">
				<div class="row d-flex justify-content-center">
					<div class="menu-content pb-70 col-lg-9">
						<div class="title text-center">
							<h1 class="mb-10">Follow your sport passion with FIELDFRENZY</h1>
							<p>In this era, sports reign as the eternal fountain of youth, captivating hearts young and old alike with its boundless energy and vibrant spirit.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-3 col-md-6">
						<div class="single-other-issue">
							<div class="thumb">
								<img class="img-fluid" src="img/football.jpg" alt="">
							</div>
							<a href="#">
								<h4>Football</h4>
							</a>
							<p>
								Football, the electrifying spectacle that ignites passions worldwide, promises an adrenaline-fueled fusion of teamwork, strategy, and sheer exhilaration on the field of dreams!
							</p>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="single-other-issue">
							<div class="thumb">
								<img class="img-fluid" src="img/basketball.jpg" alt="">
							</div>
							<a href="#">
								<h4>Basketball</h4>
							</a>
							<p>
								Basketball, where gravity-defying dunks, jaw-dropping crossovers, and buzzer-beating three-pointers come together in a whirlwind of hoop dreams and hardwood magic!
							</p>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="single-other-issue">
							<div class="thumb">
								<img class="img-fluid" src="img/tennis.jpg" alt="">
							</div>
							<a href="#">
								<h4>Tennis</h4>
							</a>
							<p>
								Tennis, the sport of swinging serves, smashing aces, and chasing fuzzy yellow balls under the sun, where every match is a thrilling dance of finesse and power!
							</p>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="single-other-issue">
							<div class="thumb">
								<img class="img-fluid" src="img/volleyball.jpg" alt="">
							</div>
							<a href="#">
								<h4>Volleyball</h4>
							</a>
							<p>
								Volleyball: Where every bump, set, and spike creates a symphony of teamwork and excitement!
							</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End other-issue Area -->


		<!-- Start testimonial Area -->

		<!-- End testimonial Area -->

		<!-- Start home-about Area -->

		<!-- End home-about Area -->


		<!-- Start blog Area -->


		<!-- End recent-blog Area -->

		<!-- start footer Area -->
		<footer class="footer-area section-gap">
			<div class="container">

				

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

		<?php
		if (isset($_GET['error']) && $_GET['error'] === 'email_already_used') {
			echo "<script>alert('Email already used');</script>";
			// Unset the $_GET parameter
			unset($_GET['error']);
			// Perform a redirect to remove the error parameter from the URL
			echo "<script>window.location.href = 'index.php';</script>";
			exit(); // Ensure that no further code is executed after the redirect
		}
		?>
	</body>

	</html>