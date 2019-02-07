<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sismagereja | Page</title>
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CVarela+Round" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}" />
	<link type="text/css" rel="stylesheet" href="{{asset('frontend/css/style.css')}}" />
	{{-- <link rel="stylesheet" href="{{asset('images/gbi.png')}}" type="icon"> --}}
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	@yield('css1')
</head>

<body>
	<header id="home">
		<div class="bg-img" style="background-image: url('/frontend/img/background1.jpg');">
			<div class="overlay"></div>
		</div>
		@include('frontend.layouts.navigation')
		@include('frontend.layouts.carousel')
	</header>
	</div>
	@include('frontend.layouts.kegiatan')
	@include('frontend.layouts.footer')
	<div id="back-to-top"></div>
	<div id="preloader">
		<div class="preloader">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>
	<script type="text/javascript" src="{{asset('frontend/js/jquery.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('frontend/js/jquery.magnific-popup.js')}}"></script>
	<script type="text/javascript" src="{{asset('frontend/js/main.js')}}"></script>
	@yield('js1')
</body>

</html>
