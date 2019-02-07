<div class="header" style="background-color: #132238;">
        <nav class="navbar top-navbar navbar-expand-md navbar-light">
            <div class="navbar-header" style="background-color: #132238;">
                <a class="navbar-brand" href="index.html">
                    <b ><i class="fa fa-home" style="color: white;"></i></b>
                    <span style="color: white;">SismaGereja</span>
                </a>
            </div>
            <div class="navbar-collapse">
                <ul class="navbar-nav mr-auto mt-md-0">
                    <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted  " href="javascript:void(0)"><i class="fa fa-bars"></i></a> </li>
                    <li class="nav-item m-l-10"> <a class="nav-link sidebartoggler hidden-sm-down text-muted  " href="javascript:void(0)"><i class="fa fa-bars"></i></a> </li>
                </ul>
                <ul class="navbar-nav my-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="{{asset('backend/images/users/9.jpg')}}" alt="user" class="profile-pic" />
                            {{ Auth::user()->email }}
                            <i class="fa fa-caret-down"></i>
                            </a>
                        <div class="dropdown-menu dropdown-menu-right animated zoomIn" style="background-color: #eef2f5;">
                            <ul class="dropdown-user">
                                <!-- <li><a href="#"><i class="ti-user"></i> Profile</a></li>
                                <li><a href="#"><i class="ti-wallet"></i> Balance</a></li>
                                <li><a href="#"><i class="ti-email"></i> Inbox</a></li>
                                <li><a href="#"><i class="ti-settings"></i> Setting</a></li> -->
                                <li><a href="{{route('logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i> Logout</a></li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>