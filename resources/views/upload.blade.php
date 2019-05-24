<!doctype html>
<html lang="en">
<style type="text/css">
.form-style-1 {
	margin:10px auto;
	max-width: 400px;
	padding: 20px 12px 10px 20px;
	font: 13px "Lucida Sans Unicode", "Lucida Grande", sans-serif;
}
.form-style-1 li {
	padding: 0;
	display: block;
	list-style: none;
	margin: 10px 0 0 0;
}
.form-style-1 label{
	margin:0 0 3px 0;
	padding:0px;
	display:block;
	font-weight: bold;
}
.form-style-1 input[type=text], 
.form-style-1 input[type=date],
.form-style-1 input[type=datetime],
.form-style-1 input[type=number],
.form-style-1 input[type=search],
.form-style-1 input[type=time],
.form-style-1 input[type=url],
.form-style-1 input[type=email],
textarea, 
select{
	box-sizing: border-box;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	border:1px solid #BEBEBE;
	padding: 7px;
	margin:0px;
	-webkit-transition: all 0.30s ease-in-out;
	-moz-transition: all 0.30s ease-in-out;
	-ms-transition: all 0.30s ease-in-out;
	-o-transition: all 0.30s ease-in-out;
	outline: none;	
}
.form-style-1 input[type=text]:focus, 
.form-style-1 input[type=date]:focus,
.form-style-1 input[type=datetime]:focus,
.form-style-1 input[type=number]:focus,
.form-style-1 input[type=search]:focus,
.form-style-1 input[type=time]:focus,
.form-style-1 input[type=url]:focus,
.form-style-1 input[type=email]:focus,
.form-style-1 textarea:focus, 
.form-style-1 select:focus{
	-moz-box-shadow: 0 0 8px #88D5E9;
	-webkit-box-shadow: 0 0 8px #88D5E9;
	box-shadow: 0 0 8px #88D5E9;
	border: 1px solid #88D5E9;
}
.form-style-1 .field-divided{
	width: 49%;
}

.form-style-1 .field-long{
	width: 100%;
}
.form-style-1 .field-select{
	width: 100%;
}
.form-style-1 .field-textarea{
	height: 100px;
}
.form-style-1 input[type=submit], .form-style-1 input[type=button]{
	background: #4B99AD;
	padding: 8px 15px 8px 15px;
	border: none;
	color: #fff;
}
.form-style-1 input[type=submit]:hover, .form-style-1 input[type=button]:hover{
	background: #4691A4;
	box-shadow:none;
	-moz-box-shadow:none;
	-webkit-box-shadow:none;
}
.form-style-1 .required{
	color:red;
}
</style>
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
								<li class="nav-item"><a class="nav-link" href="upload">Upload</a></li>
								<li class="nav-item"><a class="nav-link" href="contact">Kontak</a></li>
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
						<h2>Upload</h2>
						<div class="page_link">
							
						</div>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
<!-- form upload -->
<form action="/upload/proses" method="POST" enctype="multipart/form-data">
{{ csrf_field() }}
<ul class="form-style-1">
    <li><label>Nama<span class="required">*</span></label><input type="text" name="nama" class="field-divided" placeholder="Nama" /> </li>
    <li>
        <label>Email <span class="required">*</span></label>
        <input type="email" name="email" class="field-long" />
    </li>
    <li>
        <label>Jenis Lembar Dokumen</label>
        <select name="jenis_lembar_dokumen" class="field-select">
        <option value="A4">A4</option>
        <option value="A3">A3</option>
        <option value="F4">F4</option>
        </select>
    </li>
	<li>
        <label>Jumlah <span class="required">*</span></label>
        <textarea name="jumlah_lembar" id="field5" class="field-long field-textarea"></textarea>
    </li>
    <li>
        <label>Alamat <span class="required">*</span></label>
        <textarea name="alamat" id="field5" class="field-long field-textarea"></textarea>
    </li>
	<li><label>Jenis warna</label>
		<select name="keterangan" class="field-select">
		<option value="warna">warna</option>
		<option value="hitam putih">hitam putih</option>
		</select>
	</li>
	<li class="col-lg-8 mx-auto my-5">
		@if(count($errors) > 0)
		<div class="alert alert-danger">
			@foreach ($errors->all() as $error)
			{{ $error }} <br/>
			@endforeach
		</div>
		@endif
  
		<div class="form-group">
			<b>File PDF WAJIB</b><br/>
			<input type="file" name="file">
		</div>
	</li>
	<button type="submit" value="Upload" class="btn btn-primary">Upload</button>
</ul>


					
			</form>
		</div>
	</div>
</div>

	<!-- selesai form nya -->
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