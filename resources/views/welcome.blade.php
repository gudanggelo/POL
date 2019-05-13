<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
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
        <title>POL</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            </div>
    </body>
</html>
