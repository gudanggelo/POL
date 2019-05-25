<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/favicon.png" type="image/png">
        <title>POL</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('blog/css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('blog/vendors/linericon/style.css') }}">
        <link rel="stylesheet" href="{{ asset('blog/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('blog/vendors/owl-carousel/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('blog/vendors/lightbox/simpleLightbox.css') }}">
        <link rel="stylesheet" href="{{ asset('blog/vendors/nice-select/css/nice-select.css') }}">
        <link rel="stylesheet" href="{{ asset('blog/vendors/animate-css/animate.css') }}">
        <!-- main css -->
        <link rel="stylesheet" href="{{ asset('blog/css/style.css') }}">
		<link rel="stylesheet" href="{{ asset('blog/css/responsive.css') }}">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        
        <!--================Header Menu Area =================-->
        <header class="header_area">
            <div class="main_menu">
            	<nav class="navbar navbar-expand-lg navbar-light">
					<div class="container box_1620">
						<!-- Brand and toggle get grouped for better mobile display -->
						<a class="navbar-brand logo_h" href="/"><img src="{{ asset('blog/img/logo.png') }}" alt=""></a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
							<ul class="nav navbar-nav menu_nav justify-content-center">
								<li class="nav-item active"><a class="nav-link" href="/">Home</a></li> 
								<li class="nav-item"><a class="nav-link" href="history">Pemesanan</a></li>
							</ul>
						</div> 
						<div class="flex-center position-ref full-height">
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
        <section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
            	<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
				<div class="container">
					<div class="banner_content text-center">
						<h2>History Pemesanan</h2>
					
					</div>
				</div>
            </div>
        </section>
		<section>
<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Pemesan</th>
      <th scope="col">email</th>
	  <th scope="col">jenis</th>
	  <th scope="col">jumlah</th>
	  <th scope="col">alamat</th>
	  <th scope="col">warna</th>
	  <th scope="col">file</th>
    </tr>
  </thead>
  <tbody>
  <?php $i = 1?>
  @foreach($orders as $order)
    <tr>
		<td>{{$i}}</td>
		<td>{{$order->nama}}</td>
		<td>{{$order->email}}</td>
		<td>{{$order->jenis_lembar_dokumen}}</td>
		<td>{{$order->jumlah_lembar}}</td>
		<td>{{$order->alamat}}</td>
		<td>{{$order->keterangan}}</td>
		<td>{{$order->file}}</td>
	</tr>
	<?php $i = $i + 1?>
@endforeach
  </tbody>
</table>
</section>
        <!--================End Home Banner Area =================-->
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
<!-- END FOOTER -->
        
        
        
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="{{ asset('blog/js/jquery-3.2.1.min.js') }}"></script>
        <script src="{{ asset('blog/js/popper.js') }}"></script>
        <script src="{{ asset('blog/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('blog/js/stellar.js') }}"></script>
        <script src="{{ asset('blog/vendors/lightbox/simpleLightbox.min.js') }}"></script>
        <script src="{{ asset('blog/vendors/nice-select/js/jquery.nice-select.min.js') }}"></script>
        <script src="{{ asset('blog/vendors/isotope/imagesloaded.pkgd.min.js') }}"></script>
        <script src="{{ asset('blog/vendors/isotope/isotope-min.js') }}"></script>
        <script src="{{ asset('blog/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('blog/js/jquery.ajaxchimp.min.js') }}"></script>
        <script src="{{ asset('blog/js/mail-script.js') }}"></script>
        <script src="{{ asset('blog/vendors/counter-up/jquery.waypoints.min.js') }}"></script>
        <script src="{{ asset('blog/vendors/counter-up/jquery.counterup.min.js') }}"></script>
        <script src="{{ asset('blog/js/theme.js') }}"></script>
    </body>
</html>