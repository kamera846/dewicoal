<!DOCTYPE html>
<html lang="zxx">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

	<!-- Bootstrap Min CSS -->
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
	<!-- Owl Theme Default Min CSS -->
	<link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}" />
	<!-- Owl Carousel Min CSS -->
	<link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}" />
	<!-- Remixicon CSS -->
	<link rel="stylesheet" href="{{ asset('assets/css/remixicon.css') }}" />
	<!-- Flaticon CSS -->
	<link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}" />
	<!-- Meanmenu Min CSS -->
	<link rel="stylesheet" href="{{ asset('assets/css/meanmenu.min.css') }}" />
	<!-- Animate Min CSS -->
	<link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}" />
	<!-- Magnific Popup Min CSS -->
	<link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.min.css') }}" />
	<!-- Odometer Min CSS -->
	<link rel="stylesheet" href="{{ asset('assets/css/odometer.min.css') }}" />
	<!-- Date Picker Min CSS -->
	<link rel="stylesheet" href="{{ asset('assets/css/date-picker.min.css') }}" />
	<!-- Style CSS -->
	<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
	<!-- Responsive CSS -->
	<link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}" />

	<!-- Favicon -->
	<link rel="icon" type="image/png" href="{{ asset('assets/images/favicon.png') }}" />
	<!-- Title -->
	<title>Beranda</title>
</head>

<body>
	<!-- Start Preloader Area -->
	<div class="preloader">
		<div class="lds-ripple">
			<div class="pl-spark-1 pl-spark-2"></div>
		</div>
	</div>
	<!-- End Preloader Area -->

	<!-- Start Header Area -->
	<header class="header-area">
		<!-- Start Navbar Area -->
		<div class="navbar-area">
			<div class="mobile-responsive-nav">
				<div class="container">
					<div class="mobile-responsive-menu">
						<div class="logo">
							<a href="index.html">
								<img src="{{ asset('assets/images/dewicoal.png') }}" alt="logo desa wisata coal" />
							</a>
						</div>
					</div>
				</div>
			</div>

			<div class="desktop-nav">
				<div class="container">
					<nav class="navbar navbar-expand-md navbar-light">
						<a class="navbar-brand" href="/">
							<img src="{{ asset('assets/images/dewicoal.png') }}" alt="logo desa wisata coal" />
						</a>

						<div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
							<ul class="navbar-nav">
								<li class="nav-item active">
									<a href="/" class="nav-link">Beranda</a>
								</li>
								<li class="nav-item">
									<a href="/about" class="nav-link">Tentang</a>
								</li>
								<li class="nav-item">
									<a href="/gallery" class="nav-link">Galeri</a>
								</li>
								<li class="nav-item">
									<a href="/blog" class="nav-link">Artikel</a>
								</li>
								<li class="nav-item">
									<a href="/contact" class="nav-link">Kontak</a>
								</li>
							</ul>

							<div class="others-options">
								<ul>
									<li>
										<a href="tel:+6281353262678" class="call">
											<i class="ri-phone-fill"></i>
											+62 813 5326 2678
										</a>
									</li>
								</ul>
							</div>
						</div>
					</nav>
				</div>
			</div>
		</div>
		<!-- End Navbar Area -->
	</header>
	<!-- End Header Area -->

	@yield('page-content')

	<!-- Start Footer Area -->
	<footer class="footer-area pt-100 pb-70">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="single-footer-widget single-bg">
						<a href="index.html" class="logo">
							<img src="{{ asset('assets/images/dewicoal-white.png') }}" alt="logo desa wisata coal" />
						</a>

						<p class="mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
							incididunt ut labore et dolore magna.</p>

						<ul class="social-icon">
							<li>
								<a href="https://www.facebook.com/" target="_blank">
									<i class="ri-facebook-fill"></i>
								</a>
							</li>
							<li>
								<a href="https://www.instagram.com/" target="_blank">
									<i class="ri-instagram-line"></i>
								</a>
							</li>
							<li>
								<a href="https://twitter.com/" target="_blank">
									<i class="ri-twitter-fill"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>

				<div class="col-lg-2"></div>

				<div class="col-lg-3 col-md-6">
					<div class="single-footer-widget">
						<h3>Navigasi</h3>

						<ul class="import-link">
							<li>
								<a href="/">Beranda</a>
							</li>
							<li>
								<a href="/about">Tentang</a>
							</li>
							<li>
								<a href="/blog">Artikel</a>
							</li>
							<li>
								<a href="/gallery">Galeri</a>
							</li>
							<li>
								<a href="/contact">Kontak</a>
							</li>
						</ul>
					</div>
				</div>

				<div class="col-lg-4 col-md-6">
					<div class="single-footer-widget">
						<h3>Hubungi Kami</h3>

						<ul class="address">
							<li>
								<i class="ri-map-pin-fill"></i>
								Desa Coal, Kecamatan Kuwus, <br />
								Kabupaten Manggrai Barat - NTT
							</li>
							<li>
								<i class="ri-mail-open-fill"></i>
								<a href="mailto:info@wikin.com">info@wikin.com</a>
							</li>
							<li class="location">
								<i class="ri-phone-fill"></i>
								<a href="tel:+6281353262678">+62 813 5326 2678</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<div class="shape footer-shape-1">
			<img src="{{ asset('assets/images/footer-shape-1.png') }}" alt="Image" />
		</div>

		<div class="shape footer-shape-2">
			<img src="{{ asset('assets/images/footer-shape-2.png') }}" alt="Image" />
		</div>
	</footer>
	<!-- End Footer Area -->

	<!-- Start Copy Right Area -->
	<div class="copy-right-area">
		<div class="container">
			<p>© {{ date('Y') }} <a href="/">COAL</a> - Powered by <a target="_blank"
					href="https://jongkreatif.id/">JongKreatif</a>.</p>
		</div>
	</div>
	<!-- End Copy Right Area -->

	<!-- Start Go Top Area -->
	<div class="go-top">
		<i class="ri-arrow-up-s-fill"></i>
		<i class="ri-arrow-up-s-fill"></i>
	</div>
	<!-- End Go Top Area -->

	<!-- Jquery Min JS -->
	<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
	<!-- Bootstrap Bundle Min JS -->
	<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
	<!-- Meanmenu Min JS -->
	<script src="{{ asset('assets/js/meanmenu.min.js') }}"></script>
	<!-- Owl Carousel Min JS -->
	<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
	<!-- Owl Carousel Thumbs Min JS -->
	<script src="{{ asset('assets/js/carousel-thumbs.min.js') }}"></script>
	<!-- Wow Min JS -->
	<script src="{{ asset('assets/js/wow.min.js') }}"></script>
	<!-- Magnific Popup Min JS -->
	<script src="{{ asset('assets/js/magnific-popup.min.js') }}"></script>
	<!-- Appear Min JS -->
	<script src="{{ asset('assets/js/appear.min.js') }}"></script>
	<!-- Odometer Min JS -->
	<script src="{{ asset('assets/js/odometer.min.js') }}"></script>
	<!-- Mixitup Min JS -->
	<script src="{{ asset('assets/js/mixitup.min.js') }}"></script>
	<!-- Bootstrap Datepicker Min JS -->
	<script src="{{ asset('assets/js/bootstrap-datepicker.min.js') }}"></script>
	<!-- Form Validator Min JS -->
	<script src="{{ asset('assets/js/form-validator.min.js') }}"></script>
	<!-- Contact JS -->
	<script src="{{ asset('assets/js/contact-form-script.js') }}"></script>
	<!-- Ajaxchimp Min JS -->
	<script src="{{ asset('assets/js/ajaxchimp.min.js') }}"></script>
	<!-- Custom JS -->
	<script src="{{ asset('assets/js/custom.js') }}"></script>
</body>

</html>