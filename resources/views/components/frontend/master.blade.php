<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from news365htmllatest.bdtask.com/Demo/DemoNews365/home-style-one.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 May 2020 18:22:09 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" href="images/fev-icon.png" />

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i|Ubuntu:300,300i,400,400i,500,500i,700,700i" rel="stylesheet">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/jquery.mCustomScrollbar.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/owl-carousel/owl.carousel.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/owl-carousel/owl.theme.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/owl-carousel/owl.transitions.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/RYPP.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/jquery-ui.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/animate.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/Pe-icon-7-stroke.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/flaticon.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/style.css')}}">
</head>

<body>
{{ Breadcrumbs::render('blog') }}
<div class="se-pre-con"></div>
<x-frontend.partials.header />

    {{ $slot }}

<x-frontend.partials.footer />


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script type="text/javascript" src="{{asset('frontend/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/metisMenu.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/wow.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/jquery.newsTicker.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/classie.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/owl-carousel/owl.carousel.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/RYPP.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/jquery-ui.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/form-classie.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/custom.js')}}"></script>
</body>

</html>
