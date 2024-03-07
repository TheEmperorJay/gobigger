<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <title>GoBigger</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        @yield('meta_tags')       

        <!--  FavIcon  -->
        <link rel="shortcut icon" href="{{asset('public/frontend')}}/assets/img/gofavicon.png">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Muli:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
        <!-- Bootstrap Css -->
        <link rel="stylesheet" href="{{asset('public/frontend')}}/assets/css/bootstrap.css">
        <!-- LineIcon Css -->
        <link rel="stylesheet" href="{{asset('public/frontend')}}/assets/css/LineIcons.css">
        <!-- Swiper CSS -->
        <link rel="stylesheet" href="{{asset('public/frontend')}}/assets/css/swiper.min.css">
        <!-- popup CSS -->
        <link rel="stylesheet" href="{{asset('public/frontend')}}/assets/css/magnific-popup.css">
        <!--  Custom Style CSS  -->
        <link rel="stylesheet" href="{{asset('public/frontend')}}/assets/css/main.css">
    </head>
    <body data-spy="scroll" data-target="#scrollspy" data-offset="1">

        @yield('style')
        <div class="@if(url()->current() != url('/')) secondary-pages @endif homepage-01">

            <!--- Preloader Start -->
            <div id="onyx-preloader">   
                <div  class="preloader">
                    <div class="spinner"></div>
                </div>
            </div>
            <!-- Preloader End -->
            @include('frontend.includes.header')
            @yield('content')
            @include('frontend.includes.footer')
        </div>

        @yield('script')

        <!--  JavaScripts  -->
        <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
        <script src="{{asset('public/frontend')}}/assets/js/jquery-3.4.1.min.js"></script>
        <!--  bootstrap js  -->
        <script src="{{asset('public/frontend')}}/assets/js/bootstrap.js"></script>
        <!-- Menu JS -->
        <script src="{{asset('public/frontend')}}/assets/js/menu.html"></script>
        <!--  Swiper Js  -->
        <script src="{{asset('public/frontend')}}/assets/js/swiper.min.js"></script>
        <!--  popup Js  -->
        <script src="{{asset('public/frontend')}}/assets/js/jquery.magnific-popup.min.js"></script>
        <!--  CountTo Js  -->
        <script src="{{asset('public/frontend')}}/assets/js/jquery.countTo.js"></script>
        <!--  Custom JS  -->
        <script src="{{asset('public/frontend')}}/assets/js/gobigger.js"></script>    

    </body>
</html>