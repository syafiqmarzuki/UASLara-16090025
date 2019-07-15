<!DOCTYPE html><html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
    <title>Veltrix - Responsive Bootstrap 4 Admin Dashboard</title>
    <meta content="Admin Dashboard" name="description">
    <meta content="Themesbrand" name="author">
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico')}}">
    <link href="{{ asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/metismenu.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/icons.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/style.css')}}" rel="stylesheet" type="text/css">
</head>
<body>
<div class="home-btn d-none d-sm-block">
    <a href="index.html" class="text-dark"><i class="fas fa-home h2"></i></a>
</div>
<div class="wrapper-page">
    <div class="card overflow-hidden account-card mx-3">
        <div class="bg-primary p-4 text-white text-center position-relative">
            <h4 class="font-20 m-b-5">Welcome Back !</h4>
            <p class="text-white-50 mb-4">Sign in to continue to Veltrix.</p>
            <a href="index.html" class="logo logo-admin"><img src="{{ asset('assets/images/logo-sm.png')}}" height="24" alt="logo"></a>
        </div>
        <div class="account-card-content">
            <form class="form-horizontal m-t-30" action="index.html">
                <div class="form-group">
                    <label for="username">Username</label><input type="text" class="form-control" id="username" placeholder="Enter username"></div>
                <div class="form-group">
                    <label for="userpassword">Password</label><input type="password" class="form-control" id="userpassword" placeholder="Enter password"></div>
                <div class="form-group row m-t-20">
                    <div class="col-sm-6">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customControlInline"><label class="custom-control-label" for="customControlInline">Remember me</label>
                        </div>
                    </div>
                    <div class="col-sm-6 text-right">
                        <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Log In</button>
                    </div>
                </div>
                <div class="form-group m-t-10 mb-0 row">
                    <div class="col-12 m-t-20">
                        <a href="pages-recoverpw.html"><i class="mdi mdi-lock"></i> Forgot your password?</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="m-t-40 text-center">
        <p>
            Don't have an account ? <a href="pages-register.html" class="font-500 text-primary">Signup now</a>
        </p>
        <p>
            © 2019 Veltrix. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand
        </p>
    </div>
</div>
<!-- end wrapper-page -->
<!-- jQuery  -->
<script src="{{ asset('assets/js/jquery.min.js')}}"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ asset('assets/js/metisMenu.min.js')}}"></script>
<script src="{{ asset('assets/js/jquery.slimscroll.js')}}"></script>
<script src="{{ asset('assets/js/waves.min.js')}}"></script>
<!-- App js -->
<script src="{{ asset('assets/js/app.js')}}"></script>
</body>
</html>