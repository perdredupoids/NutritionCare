<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="img/favicon.png" type="image/png">
	<title>bájos</title>
	
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="vendors/linericon/style.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
	<link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
	<link rel="stylesheet" href="vendors/animate-css/animate.css">
	<link rel="stylesheet" href="vendors/jquery-ui/jquery-ui.css">
	<!-- main css -->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/responsive.css">
</head>

<body>

	<!--================Header Menu Area =================-->
	<header class="header_area">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="index.php">
						bájos
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav justify-content-center mx-auto">
							<li class="nav-item">
								<a class="nav-link" href="index.php">Fő</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="blog.php">Cikkek</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="contact.php">Kapcsolatok</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="terms.php">Általános szerződési feltételek</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="policy.php">Adatvédelmi politika</a>
							</li>
						</ul>
						<ul class="nav navbar-nav ml-auto search">
							<li class="nav-item d-flex align-items-center mr-10">
								<div class="menu-form">
									<form>
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Search here">
										</div>
									</form>
								</div>
								<button type="submit" class="search-icon">
									<i class="lnr lnr-magnifier"></i>
								</button>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</header>
	<!--================ Header Menu Area =================-->

	<section class="contact_area section-gap" style="margin-top: 10px;padding: 100px 0;">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="contact_info">
						<div class="info_item">
							<i class="lnr lnr-home"></i>
							<h6>3161 Budapest, Molnár körút 823.</h6>
						</div>
						<div class="info_item">
							<i class="lnr lnr-phone-handset"></i>
							<h6><a href="#">+6961825681356</a></h6>
						</div>
						<div class="info_item">
							<i class="lnr lnr-envelope"></i>
							<h6><a href="#">info.contact@<span class="server-name"></span></a></h6>
						</div>
					</div>
				</div>
				<div class="col-md-9">
					<h4 style="margin-bottom: 10px;">Hagyjuk egy megjegyzést</h4>
					<form class="contact_form" action="thanks.php" method="post">
						<div class="form-group">
							<input type="text" class="form-control" id="contact-name" placeholder="Név">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" id="contact-lastname" placeholder="Vezetéknév">
						</div>
						<div class="form-group">
							<input type="email" class="form-control" id="contact-email" placeholder="Email">
						</div>
						<div class="form-group">
							<input type="email" class="form-control" id="contact-phone" placeholder="Telefonszám">
						</div>
						<div class="form-group">
							<textarea class="form-control" name="message" id="message" cols="30" rows="10" placeholder="A szöveg a hozzászólás"></textarea>
							<label class="terms-field">
								<input type="checkbox" name="terms" value="check" required=""/>
								<a href="policy.php" target="_blank">
									Elolvastam, majd elfogadja a felhasználási feltételek, a felhasználói szerződés
								</a>
							</label>
						</div>
						<button type="submit" class="btn btn-block btn-primary text-white py-2 px-5">Küldeni</button>
					</form>
				</div>
			</div>
		</div>
	</section>

	<!--================ start footer Area  =================-->
	<footer class="footer-area section-gap" style="padding: 0 0 20px;">
		<div class="container">
			<div class="footer-bottom footer_copy">
				<div class="footer-social">
					<a href="#">
						<i class="fa fa-facebook"></i>
					</a>
					<a href="#">
						<i class="fa fa-twitter"></i>
					</a>
					<a href="#">
						<i class="fa fa-dribbble"></i>
					</a>
					<a href="#">
						<i class="fa fa-behance"></i>
					</a>
				</div>
			</div>
		</div>
	</footer>
	<!--================ End footer Area  =================-->

	<!-- ####################### Start Scroll to Top Area ####################### -->
	<div id="back-top">
		<a title="Go to Top" href="#">
			<i class="fa fa-angle-up"></i>
		</a>
	</div>
	<!-- ####################### End Scroll to Top Area ####################### -->

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/stellar.js"></script>
	<script src="vendors/lightbox/simpleLightbox.min.js"></script>
	<script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
	<script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
	<script src="vendors/isotope/isotope-min.js"></script>
	<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
	<script src="vendors/jquery-ui/jquery-ui.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/mail-script.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
	<script src="js/theme.js"></script>

	<div class='cookie-banner'>
		<p>
			Az oldal cookie-kat használ. Ezek lehetővé teszik számunkra, hogy ismerje meg információt kap arról, hogy a felhasználó experience.By tovább böngészni az oldalt, egyetértek, hogy a cookie-k használatát, amelyet a webhely tulajdonosa megfelelően  <a target="_blank" href="https://en.wikipedia.org/wiki/HTTP_cookie">Cookie-politika</a>
		</p>
		<button class='close-cookie'>&times;</button>
	</div>
	<script>
		window.onload = function () {
			$('.close-cookie').click(function () {
				$('.cookie-banner').fadeOut();
			})
		}
	</script>
	<script>
		let elems = document.querySelectorAll('.server-name');
		elems.forEach((elem) => {
			elem.innerHTML = window.location.hostname
		})
	</script>
</body>

</html>