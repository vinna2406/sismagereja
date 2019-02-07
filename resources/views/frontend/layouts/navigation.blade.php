<nav id="nav" class="navbar">
    <div class="container">

        <div class="navbar-header">
            <!-- Logo -->
            <div class="navbar-brand">
                <a href="index.html">
                    <img class="logo" src="{{asset('images/logo_dewita.png')}}" alt="logo">
                    <img class="logo-alt" src="{{asset('images/logo_dewita.png')}}" alt="logo">
                </a>
            </div>
            <!-- /Logo -->

            <!-- Collapse nav button -->
            <div class="nav-collapse">
                <span></span>
            </div>
            <!-- /Collapse nav button -->
        </div>

        <!--  Main navigation  -->
        <ul class="main-nav nav navbar-nav navbar-right">
            <li class="{{{ (Request::is('home') ? 'class=active' : '') }}}"><a href="{{url('/')}}">Home</a></li>
            <li class="{{{ (Request::is('article') ? 'class=active' : '') }}}"><a href="{{url('article')}}">Artikel</a></li>
            <li class="has-dropdown {{{ (Request::is('products') ? 'class=active' : '') }}}"><a href="javascript:void()">Products</a>
                <ul class="dropdown">
                    <li><a target="_blank" rel="noopener noreferrer" href="https://www.instagram.com/dewita.co/">Fashion</a></li>
                    <li><a target="_blank" rel="noopener noreferrer" href="https://www.instagram.com/morvey.store.bali/">Souvenir</a></li>
                    <li><a target="_blank" rel="noopener noreferrer" href="https://www.instagram.com/sahabatkonveksibali/">Konveksi</a></li>
                </ul>
            </li>
            <li class="{{{ (Request::is('about-us') ? 'class=active' : '') }}}"><a href="{{url('about-us')}}">About Us</a></li>
        </ul>
        <!-- /Main navigation -->

    </div>
</nav>