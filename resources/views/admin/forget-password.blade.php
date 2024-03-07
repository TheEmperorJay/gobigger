<!DOCTYPE html>
<html class="no-js chrome" lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <link rel="apple-touch-icon" sizes="180x180" href="{{ URL::asset('public') }}/images/apple-icon-180x180.png">
        <link rel="apple-touch-icon" sizes="57x57" href="{{ URL::asset('public') }}/images/fevicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="{{ URL::asset('public') }}/images/fevicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="{{ URL::asset('public') }}/images/fevicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="{{ URL::asset('public') }}/images/fevicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="{{ URL::asset('public') }}/images/fevicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="{{ URL::asset('public') }}/images/fevicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="{{ URL::asset('public') }}/images/fevicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="{{ URL::asset('public') }}/images/fevicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ URL::asset('public') }}/images/fevicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="{{ URL::asset('public') }}/images/fevicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ URL::asset('public') }}/images/fevicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="{{ URL::asset('public') }}/images/fevicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ URL::asset('public') }}/images/fevicon/favicon-16x16.png">
        <!-- <link rel="manifest" href="{{ URL::asset('public') }}/images/fevicon/manifest.json"> -->
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="{{ URL::asset('public') }}/images/fevicon/ms-icon-144x144.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <title>Tropsy Admin | Forget Password</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
          name='viewport'/>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <!--Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800,900" rel="stylesheet">
    <!-- CSS Files -->
    <link href="{{ asset('public/admin/plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet"/>
    <link href="{{ asset('public/admin/plugins/bootstrap/css/bootstrap-grid.css') }}" rel="stylesheet"/>
    <link href="{{ asset('public/admin/plugins/bootstrap/css/bootstrap-reboot.css') }}" rel="stylesheet"/>
    <link href="{{ asset('public/admin/css/colors.css') }}" rel="stylesheet"/>
    <link href="{{ asset('public/admin/css/style.css') }}" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('public/css/parsely.css') }}">
</head>
<body class="theme-orange" style="overflow: auto;">
<div class="auth animated slideInRight">
    @if(Session::has('success'))
        <div class="alert alert-success alert-dismissable">
            <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
            <i class="glyphicon glyphicon-success"></i> {{ Session::get('success') }}
        </div>
    @endif
    <div class="pvr_card">
        <div class="body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header">
                        <div class="logo m-t-15">
                            <!--<img class="w-in-22" src="{{ URL::asset('public') }}/admin/img/logo.png" alt="PAYUP">-->
                        </div>
                        <h1 class="text-white">Tropsy Admin</h1>
                    </div>
                </div>
                <form class="col-lg-12" id="sign_in" method="POST" action="{{URL::to('admin/forgetPassword')}}" data-parsley-validate>
                    @csrf
                    <h5 class="title">Forget Password?</h5>
                    <div class="form-group-pvr form-float">
                        <div class="form-line-pvr">
                            <input type="email" name="email" class="form-control" data-parsley-pattern="/[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,5}/g" data-parsley-pattern-message="Please enter valid email address." data-parsley-errors-container="#errorEmail">
                            <label class="form-label">Email Id</label>
                        </div>
                        <span id="errorEmail" class="text-left"></span>
                    </div>
                    <div class="col-lg-12 m-t-10">
                        <button class="btn btn-purple waves-effect">Reset Password</button>
                    </div>
                </form>
                <div class="col-lg-12 m-t-20">
                    <a class="" href="{{URL::to('admin/login')}}">Sign In</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<!--   Core JS Files   -->
<script src="{{ asset('public/admin/plugins/jquery/jquery-3.2.1.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('public/admin/plugins/bootstrap/js/bootstrap.bundle.js') }}" type="text/javascript"></script>
<script src="{{ asset('public/admin/plugins/jquery.backstretch/jquery.backstretch.js') }}" type="text/javascript"></script>
<!-- BEGIN PAGE LEVEL JS -->
<script src="{{ asset('public/admin/js/pvr_lite_login_v1.js') }}" type="text/javascript"></script>
<script type="text/javascript" src="{{ URL::asset('public') }}/js/data-parsely.js"></script>
<!-- END PAGE LEVEL JS -->
</html>