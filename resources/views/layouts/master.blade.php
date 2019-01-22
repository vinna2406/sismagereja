<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('images/gbi.png')}}">
    <title>Sisma Gereja Bethel Indonesia Rayon 1-I</title>
    <link href="{{asset('backend/css/lib/bootstrap/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('backend/css/helper.css')}}" rel="stylesheet">
    <link href="{{asset('backend/css/style.css')}}" rel="stylesheet">
    @yield('css')
</head>

<body class="fix-header fix-sidebar">
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
			<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <div id="main-wrapper">
        @include('layouts.header')
        @include('layouts.navigation')
        @yield('content')
            <footer class="footer"> © 2018 All rights reserved. Template designed by <a href="https://colorlib.com">Colorlib</a></footer>
        </div>
    </div>
    <script src="{{asset('backend/js/lib/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('backend/js/lib/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{asset('backend/js/lib/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('backend/js/jquery.slimscroll.js')}}"></script>
    <script src="{{asset('backend/js/sidebarmenu.js')}}"></script>
    <script src="{{asset('backend/js/lib/sticky-kit-master/dist/sticky-kit.min.js')}}"></script>
    <script src="{{asset('backend/js/custom.min.js')}}"></script>
    @yield('js')
</body>

</html>