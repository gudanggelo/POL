<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="{{ asset('blog/img/favicon.png') }}" type="image/png">
	<title>POL !</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{ asset('blog/css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ asset('blog/vendors/linericon/style.css') }}">
	<link rel="stylesheet" href="{{ asset('blog/css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('blog/vendors/owl-carousel/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ asset('blog/css/magnific-popup.css') }}">
	<link rel="stylesheet" href="{{ asset('blog/vendors/nice-select/css/nice-select.css') }}">
	<link rel="stylesheet" href="{{ asset('blog/vendors/animate-css/animate.css') }}">
	<link rel="stylesheet" href="{{ asset('blog/vendors/flaticon/flaticon.css') }}">
	<!-- main css -->
	<link rel="stylesheet" href="{{ asset('blog/css/style.css') }}">
</head>

<body>

	<!--================Header Menu Area =================-->
	<header class="header_area">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="index.html"><img src="{{ asset('blog/img/logo.png') }}" alt=""></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav justify-content-center">
							<li class="nav-item active"><a class="nav-link" href="index.html">Home</a></li>
							<li class="nav-item"><a class="nav-link" href="price.html">Pricing</a></li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">Blog</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
									<li class="nav-item"><a class="nav-link" href="single-blog.html">Blog Details</a></li>
								</ul>
							</li>
							<li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
						</ul>
						 @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">{{ Auth::user()->name }}</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
					</div>
				</div>
			</nav>
		</div>
	</header>
	<!--================Header Menu Area =================-->

	<!--================Home Banner Area =================-->
	<section class="home_banner_area">
		<div class="banner_inner">
			<div class="container">
				<div class="row">
					<div class="col-lg-5">
						<div class="banner_content">
							<h2>
								POL  <br>
								<h3>Solusi handal dokumen anda!</h3>
							</h2>
							<p>
								Kami memahami anda membutuhkan sesuatu yang efisien dan dapat meningkatkan produktifitas anda. POL menawarkan anda kemudahan dalam mencetak berbagai macam dokumen. Mulai dari tugas kuliah hingga cetak spanduk besar dengan cepat dan nyaman tentunya.
							</p>
							<div class="d-flex align-items-center">
								<a class="primary_btn" href="#"><span>Cetak Sekarang!</span></a>
							</div>
						</div>
					</div>
					<div class="col-lg-7">
						<div class="home_right_img">
							<img class="img-fluid" src="{{ asset('blog/img/banner/home-right.png') }}" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Home Banner Area =================-->

	<!--================Start Features Area =================-->
	<section class="section_gap features_area">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8 text-center">
					<div class="main_title">
						<p class="top_title">Cepat dan Aman </p>
						<h2>KECEPATAN DAN KEAMANAN YANG MENJADI PRIORITAS!</h2>
						<p>Sesuai moto kami <i><b>"Solusi handal untuk dokumen anda"</b></i> kami sangat mengerti kebutuhan anda akan kebutuhan cetak dokumen yang cepat dan aman. 
							POL adalah sebuah platform online yang memproduksi print dan cetakan dengan kualitas terbaik. 
							Kami menyediakan berbagai produk dan jenis printing, mulai dari cetak foto-foto personal, cetak karya seni, dan percetakan untuk bisnis, semuanya berbasis online. 
							Anda tidak perlu membuang waktu untuk pergi ke percetakan dan mengantri selama berjam-jam, dengan POL sekarang semuanya mudah, cepat, dan tak perlu repot. 
						</p>
						<a href="#" class="primary_btn"><span>Cetak Sekarang!</span></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Features Area =================-->
	<!--================Srart Pricing Area =================-->
	<section class="price_area section_gap">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8 text-center">
					<div class="main_title">
						<h2>PRODUK KAMI</h2>
						<p>Kami menawarkan harga yang sangat bersaing dan bisa dibilang murah tapi tidak murahan :)</p>
					</div>
				</div>
			</div>
			<div class="price_inner row justify-content-center">
				<div class="col-lg-4 col-md-6">
					<div class="price_item">
						<div class="price_head">
							<h4>Cetak Dokumen Biasa</h4>
						</div>
						<div class="price_body">
							<ul class="list">
								<li>Dengan hasil yang baik serta cepat. <br>POL adalah pilihan tepat</li>
							</ul>
						</div>
						<div class="price_footer">
							<h3>MULAI</h3>
							<h4>2000 Rupiah<br></h4>
							<a class="primary_btn" href="#"><span>Print Sekarang!</span></a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="price_item">
						<div class="price_head">
							<h4>Cetak Photo</h4>
						</div>
						<div class="price_body">
							<ul class="list">
								<li>Kenanglah momen terbaikmu dengan <br> pilihan dari POL</li>
							</ul>
						</div>
						<div class="price_footer">
							<h3>SEGERA</h3>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="price_item">
						<div class="price_head">
							<h4>Brosur</h4>
						</div>
						<div class="price_body">
							<ul class="list">
								<li>Brosur sangat efektif untuk memperkenalkan produk dan jasa Anda ke publik.</li>
							</ul>
						</div>
						<div class="price_footer">
							<h3>SEGERA</h3>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!--================Footer Area =================-->
	<footer class="footer_area">
		<div class="container">
			<div class="row footer_inner">
				<div class="col-lg-5 col-sm-6">
					<aside class="f_widget ab_widget">
						<div class="f_title">
							<h3>POL</h3>
							<h4>Solusi Handal Dokumen Anda</h4>
						</div>
						
						<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved |This Build made by <a href="http://www.instagram.com/taufikhidaayat" target="_blank">Taufik Hidayat</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
					</aside>
				</div>
				<div class="col-lg-5 col-sm-6">
					<aside class="f_widget news_widget">
						<div class="f_title">
							<h3>Newsletter</h3>
						</div>
						<p>Berlangganan info menarik kami!</p>
						<div id="mc_embed_signup">
							<form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
							 method="get" class="subscribe_form relative">
								<div class="input-group d-flex flex-row">
									<input name="EMAIL" placeholder="Enter email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '"
									 required="" type="email">
									<button class="btn sub-btn"><span class="lnr lnr-arrow-right"></span></button>
								</div>
								<div class="mt-10 info"></div>
							</form>
						</div>
					</aside>
				</div>
				<div class="col-lg-2">
					<aside class="f_widget social_widget">
						<div class="f_title">
							<h3>Follow Me</h3>
						</div>
						<p>Let us be social</p>
						<ul class="list">
							<li><a href="http://www.facebook.com/taufikhidayatkeren"><i class="fa fa-facebook"></i></a></li>
							<li><a href="https://twitter.com/taufikhidaayat"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
							<li><a href="#"><i class="fa fa-behance"></i></a></li>
						</ul>
					</aside>
				</div>
			</div>
		</div>
	</footer>
	<!--================End Footer Area =================-->

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="{{ asset('blog/js/jquery-3.2.1.min.js') }}"></script>
	<script src="{{ asset('blog/js/popper.js') }}"></script>
	<script src="{{ asset('blog/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('blog/js/stellar.js') }}"></script>
	<script src="{{ asset('blog/js/jquery.magnific-popup.min.js') }}"></script>
	<script src="{{ asset('blog/vendors/nice-select/js/jquery.nice-select.min.js') }}"></script>
	<script src="{{ asset('blog/vendors/isotope/imagesloaded.pkgd.min.js') }}"></script>
	<script src="{{ asset('blog/vendors/isotope/isotope-min.js') }}"></script>
	<script src="{{ asset('blog/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('blog/js/jquery.ajaxchimp.min.js') }}"></script>
	<script src="{{ asset('blog/vendors/counter-up/jquery.waypoints.min.js') }}"></script>
	<script src="{{ asset('blog/vendors/counter-up/jquery.counterup.min.js') }}"></script>
	<script src="{{ asset('blog/js/mail-script.js') }}"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="js/gmaps.min.js"></script>
	<script src="js/theme.js"></script>
</body>

</html>
