<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('backend/images/favicon.png')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Login Page | sismagereja</title>
    <link href="{{asset('backend/css/lib/bootstrap/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('backend/css/helper.css')}}" rel="stylesheet">
    <link href="{{asset('backend/css/style.css')}}" rel="stylesheet">
</head>

<body class="fix-header fix-sidebar" style="background-color: #132238;">
    <div id="main-wrapper">
        <div class="unix-login">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-4">
                        <div class="login-content card" style="box-shadow: 0 5px 20px rgba(0, 0, 0, 0.5); background-color: #364e68;">
                            <div class="login-form" style="background-color: #ebf0f6;">
                                <div class="text-center">
                                    <img src="{{url('images/gbi.png')}}" height="150px" width="150px">
                                </div>
                                <br>
                                <h4>Login Page | SismaGereja</h4>
                                <form action="{{ url('/login')}}" method="POST">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label style="color: black;">Email address</label>
                                        <input type="email" class="form-control" placeholder="Email" name="email" required autofocus>
                                    </div>
                                    <div class="form-group">
                                        <label style="color: black;">Password</label>
                                        <input type="password" class="form-control" placeholder="Password" name="password" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Sign in</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script src="{{asset('backend/js/lib/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('backend/js/lib/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('backend/js/jquery.slimscroll.js')}}"></script>
    <script src="{{asset('backend/js/custom.min.js')}}"></script>

</body>

</html>