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
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/style.css')}}">
</head>

<body>

<div class="se-pre-con"></div>
<header>
    <!-- Mobile Menu Start -->
    <div class="mobile-menu-area navbar-fixed-top hidden-sm hidden-md hidden-lg">
        <nav class="mobile-menu" id="mobile-menu">
            <div class="sidebar-nav">
                <ul class="nav side-menu">
                    <li class="sidebar-search">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                        <button class="btn mobile-menu-btn" type="button">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </span>
                        </div>
                        <!-- /input-group -->
                    </li>
                    <li><a href="index.html">Home</a></li>
                    @foreach($categories as $category)
                        <li class="@if($category->subcategory->count() > 0) dropdown @endif">
                            @if($category->subcategory->count() > 0)
                                <a href="{{route('article.filter', $category->id)}}" class="" >{{$category->name}} <span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    @foreach($category->subcategory as $subcat)
                                        <li class="dropdown-submenu">
                                            <a href="{{route('article.filter_sub', $subcat->id)}}" class="text-uppercase">{{$subcat->name}}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            @else
                                <a href="{{route('article.filter', $category->id)}}" class="text-uppercase">{{$category->name}}</a>
                            @endif
                        </li>
                    @endforeach
                    <!-- social icon -->
                    <li>
                        <div class="social">
                            <ul>
                                <li><a href="#" class="facebook"><i class="fa fa-facebook"></i> </a></li>
                                <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" class="google"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="container">
            <div class="top_header_icon">
                    <span class="top_header_icon_wrap">
                            <a target="_blank" href="#" title="Twitter"><i class="fa fa-twitter"></i></a>
                        </span>
                <span class="top_header_icon_wrap">
                            <a target="_blank" href="#" title="Facebook"><i class="fa fa-facebook"></i></a>
                        </span>
                <span class="top_header_icon_wrap">
                            <a target="_blank" href="#" title="Google"><i class="fa fa-google-plus"></i></a>
                        </span>
                <span class="top_header_icon_wrap">
                            <a target="_blank" href="#" title="Vimeo"><i class="fa fa-vimeo"></i></a>
                        </span>
                <span class="top_header_icon_wrap">
                            <a target="_blank" href="#" title="Pintereset"><i class="fa fa-pinterest-p"></i></a>
                        </span>
            </div>
            <div id="showLeft" class="nav-icon">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>

    <!-- top header -->
    <div class="top_header hidden-xs">
        <div class="container">
            <div class="row">
                <!--breaking news-->
                <div class="col-sm-12 col-md-2">
                    <p class="today_date">{{date('d M Y', strtotime(\Carbon\Carbon::now()))}}</p>
                </div>
                <div class="col-sm-12 col-md-8">
                    <div class="newsticker-inner">
                        <ul class="newsticker">
                            @foreach($headlines as $row)
                                <li><span class="color-1">শিরোনাম: </span><a href="#">{{$row->name}}</a></li>
                            @endforeach
                        </ul>
                        <div class="next-prev-inner">
                            <a href="#" id="prev-button"><i class='pe-7s-angle-left'></i></a>
                            <a href="#" id="next-button"><i class='pe-7s-angle-right'></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-2">
                    <div class="top_header_icon">
                            <span class="top_header_icon_wrap">
                                    <a target="_blank" href="#" title="Twitter"><i class="fa fa-twitter"></i></a>
                                </span>
                        <span class="top_header_icon_wrap">
                                    <a target="_blank" href="#" title="Facebook"><i class="fa fa-facebook"></i></a>
                                </span>
                        <span class="top_header_icon_wrap">
                                    <a target="_blank" href="#" title="Google"><i class="fa fa-google-plus"></i></a>
                                </span>
                        <span class="top_header_icon_wrap">
                                    <a target="_blank" href="#" title="Vimeo"><i class="fa fa-vimeo"></i></a>
                                </span>
                        <span class="top_header_icon_wrap">
                                    <a target="_blank" href="#" title="Pintereset"><i class="fa fa-pinterest-p"></i></a>
                                </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--    top banner--}}
    <div class="top_banner_wrap">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-4 col-sm-4">
                    <div class="header-logo">
                        <!-- logo -->
                        <a href="home-style-one.html">
                            <img class="td-retina-data img-responsive" src="{{asset('frontend/images/logo.png')}}" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-xs-8 col-md-8 col-sm-8 hidden-xs">
                    <div class="header-banner">
                        <a href="#"><img class="td-retina img-responsive" src="{{asset('frontend/images/top-bannner.jpg')}}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- navber -->
    <div class="container hidden-xs">
        <nav class="navbar">
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="{{route('home')}}">HOME</a></li>
                    @foreach($categories as $category)
                    <li class="@if($category->subcategory->count() > 0) dropdown @endif">
                        @if($category->subcategory->count() > 0)
                        <a href="{{route('article.filter', $category->id)}}" class="dropdown-toggle text-uppercase" >{{$category->name}} <span class="pe-7s-angle-down"></span></a>
                        <ul class="dropdown-menu menu-slide">
                            @foreach($category->subcategory as $subcat)
                            <li class="dropdown-submenu">
                                <a href="{{route('article.filter_sub', $subcat->id)}}" class="text-uppercase">{{$subcat->name}}</a>
                            </li>
                            @endforeach
                        </ul>
                        @else
                            <a href="{{route('article.filter', $category->id)}}" class="text-uppercase">{{$category->name}}</a>
                        @endif
                    </li>
                    @endforeach
                    <li><a href="{{route('contact_us')}}">CONTACT</a></li>
                </ul>
            </div>
            <!-- navbar-collapse -->
        </nav>
    </div>
</header>




@yield('content')


{{--footer area--}}
<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="footer-box footer-logo-address">
                    <h3 class="category-headding ">Contact us</h3>
                    <div class="headding-border"></div>
                    <!-- address  -->
                    <img src="images/footer-logo.png" class="img-responsive" alt="">
                    <address class="mt-0">
                        14L.E Goulburn St, Sydney 2000NSW
                        <br> Tell: 01922296392
                        <br> Email: <a href="https://news365htmllatest.bdtask.com/cdn-cgi/l/email-protection" class="__cf_email__">news365@mail.com</a>
                    </address>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="footer-box">
                    <h3 class="category-headding">POPULAR TAGS</h3>
                    <div class="headding-border"></div>
                    @foreach($tags as $tag)
                        <a class="tag" href="#" title="">{{$tag->name}}</a>
                    @endforeach
                    <!-- /.newsletter -->
                </div>
            </div>
            <div class="col-sm-4">
                <div class="newsletter-inner mt-0">
                    <!-- newsletter -->
                    <h3 class="category-headding ">NEWSLETTER</h3>
                    <div class="headding-border"></div>
                    <p>Enter your email address for our mailing list!</p>
                    <form action="{{route('subscriber.store')}}" method="post">
                        @csrf
                        <input type="text" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                        <button type="submit" class="btn btn-style">Subscribe</button>
                    </form>
                </div>
            </div>

            <!-- /.top rated  -->
        </div>
    </div>
</footer>

{{--sub footer--}}
<div class="sub-footer">
    <!-- sub footer -->
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <p><a href="#" class="color-1">bdtask</a> Theme | All right Reserved 2016</p>
                <div class="social">
                    <ul>
                        <li><a href="#" class="facebook"><i class="fa fa-facebook"></i> </a></li>
                        <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="google"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" class="flickr"><i class="fa fa-flickr"></i></a></li>
                        <li><a href="#" class="youtube"><i class="fa fa-youtube"></i></a></li>
                        <li><a href="#" class="vimeo"><i class="fa fa-vimeo"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>



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
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
<script type="text/javascript" src="{{asset('frontend/js/custom.js')}}"></script>
<script !src="">
    // alertify msg
    @if(Session::has('success'))
    alertify.success('{{ Session::get('success') }}');
    @endif

    @if(Session::has('error'))
    alertify.error('{{ Session::get('error') }}');
    @endif

    @if($errors->any())
    @foreach ($errors->all() as $error)
    alertify.error('{{ $error }}');
    @endforeach
    @endif
</script>

@yield('script')
</body>

</html>
