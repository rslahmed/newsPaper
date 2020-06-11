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
                    <li>
                        <a href="#">All pages<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Home <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li><a href="home-style-one.html">Home style one</a> </li>
                                    <li><a href="home-style-two.html">Home style two</a></li>
                                    <li><a href="home-style-three.html">Home style three</a></li>
                                    <li><a href="home-style-four.html">Home style four</a></li>
                                    <li><a href="home-style-five.html">Home style five</a></li>
                                </ul>
                                <!-- /.nav-third-level -->
                            </li>

                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li><a href="#">Contact</a></li>

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
                <div class="col-sm-4 col-md-3">
                    <div class="top_header_menu_wrap">
                        <ul class="top-header-menu">
                            <li><a href="login%26registration.html">REGISTER</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">LOGIN</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <div class="login-inner">
                                            <input type="text" class="form-control" id="name_email" name="name_email" placeholder="username or emaile">
                                            <hr>
                                            <input type="password" class="form-control" id="pass" name="pass" placeholder="*******">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" value="">Remember me</label>
                                            <button type="button" class="btn btn-lr btn-active">LOGIN</button>
                                            <button type="button" class="btn btn-lr">REGISTR</button>
                                            <div class="foeget"><a href="#">Forget username/password?</a></div>
                                            <div class="social_icon">
                                                <div class="social_icon_box social_icon_box_1">
                                                    <div class="icon facebook-icon"></div>
                                                    <span class="social_info">Login with facebook</span>
                                                </div>
                                            </div>
                                            <div class="social_icon">
                                                <div class="social_icon_box social_icon_box_2">
                                                    <div class="icon twitter-icon"></div>
                                                    <span class="social_info">Login with twitter</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="contact-style-two.html">CONTACT</a></li>
                        </ul>
                    </div>
                </div>
                <!--breaking news-->
                <div class="col-sm-8 col-md-7">
                    <div class="newsticker-inner">
                        <ul class="newsticker">
                            <li><span class="color-1">Fashion</span><a href="#">Etiam imperdiet volutpat libero eu tristique.imperdiet volutpat libero eu tristique.</a></li>
                            <li><span class="color-2">International</span><a href="#">Curabitur porttitor ante eget hendrerit adipiscing.</a></li>
                            <li><span class="color-3">Health</span><a href="#">Praesent ornare nisl lorem, ut condimentum lectus gravida ut.</a></li>
                            <li><span class="color-4">technology</span><a href="#">Nunc ultrices tortor eu massa placerat posuere.</a></li>
                            <li><span class="color-1">Travel</span><a href="#">Etiam imperdiet volutpat libero eu tristique.imperdiet volutpat libero eu tristique.</a></li>
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
                            <img class="td-retina-data img-responsive" src="frontend/images/logo.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-xs-8 col-md-8 col-sm-8 hidden-xs">
                    <div class="header-banner">
                        <a href="#"><img class="td-retina img-responsive" src="frontend/images/top-bannner.jpg" alt=""></a>
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
                        <a href="#" class="dropdown-toggle text-uppercase"  data-toggle="dropdown">{{$category->name}} <span class="pe-7s-angle-down"></span></a>
                        <ul class="dropdown-menu menu-slide">
                            @foreach($category->subcategory as $subcat)
                            <li class="dropdown-submenu">
                                <a href="#" class="text-uppercase">{{$subcat->name}}</a>
                            </li>
                            @endforeach
                        </ul>
                        @else
                            <a href="#" class="text-uppercase">{{$category->name}}</a>
                        @endif
                    </li>
                    @endforeach
                    <li><a href="#">CONTACT</a></li>
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
                <div class="footer-box">
                    <h3 class="category-headding">POPULAR TAGS</h3>
                    <div class="headding-border"></div>
                    <a class="tag" href="#" title="">EDUCATION</a>
                    <a class="tag" href="#" title="">FASHION</a>
                    <a class="tag" href="#" title="">CREATIVE</a>
                    <a class="tag" href="#" title="">CMS</a>
                    <a class="tag" href="#" title="">ENTERTAINMENT</a>
                    <a class="tag" href="#" title="">TECHNOLOGY</a>
                    <a class="tag" href="#" title="">COLLAGE</a>
                    <a class="tag" href="#" title="">CULTURE</a>
                    <a class="tag" href="#" title="">BLOG</a>
                    <a class="tag" href="#" title="">BUSINESS</a>
                    <a class="tag" href="#" title="">MUSIC</a>
                    <div class="newsletter-inner">
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
                    <!-- /.newsletter -->
                </div>
            </div>
            <div class="col-sm-4">
                <div class="footer-box">
                    <!-- featured news -->
                    <h3 class="category-headding ">FEATURED NEWS</h3>
                    <div class="headding-border bg-color-2"></div>
                    <div class="box-item wow fadeIn" data-wow-duration="2s">
                        <div class="img-thumb">
                            <a href="#" rel="bookmark"><img class="entry-thumb" src="images/popular_news_01.jpg" alt="" height="80" width="100"></a>
                        </div>
                        <div class="item-details">
                            <h6 class="sub-category-title bg-color-1">
                                <a href="#">SPORTS</a>
                            </h6>
                            <h3 class="td-module-title"><a href="#">It is a long established fact that a reader will</a></h3>
                            <div class="post-editor-date">
                                <!-- post date -->
                                <div class="post-date">
                                    <i class="pe-7s-clock"></i> Oct 6, 2016
                                </div>
                                <!-- post comment -->
                                <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-item wow fadeIn" data-wow-duration="2s" data-wow-delay="0.2s">
                        <div class="img-thumb">
                            <a href="#" rel="bookmark"><img class="entry-thumb" src="images/popular_news_02.jpg" alt="" height="80" width="100"></a>
                        </div>
                        <div class="item-details">
                            <h6 class="sub-category-title bg-color-2">
                                <a href="#">TECHNOLOGY </a>
                            </h6>
                            <h3 class="td-module-title"><a href="#">The generated Lorem Ipsum is therefore</a></h3>
                            <div class="post-editor-date">
                                <!-- post date -->
                                <div class="post-date">
                                    <i class="pe-7s-clock"></i> Oct 6, 2016
                                </div>
                                <!-- post comment -->
                                <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-item wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s">
                        <div class="img-thumb">
                            <a href="#" rel="bookmark"><img class="entry-thumb" src="images/popular_news_03.jpg" alt="" height="80" width="100"></a>
                        </div>
                        <div class="item-details">
                            <h6 class="sub-category-title bg-color-3">
                                <a href="#">HEALTH</a>
                            </h6>
                            <h3 class="td-module-title"><a href="#">The standard chunk of Lorem Ipsum used since</a></h3>
                            <div class="post-editor-date">
                                <!-- post date -->
                                <div class="post-date">
                                    <i class="pe-7s-clock"></i> Oct 6, 2016
                                </div>
                                <!-- post comment -->
                                <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.featured news -->
            </div>
            <div class="col-sm-4">
                <div class="footer-box">
                    <!-- top rated  -->
                    <h3 class="category-headding">TOP RATED</h3>
                    <div class="headding-border bg-color-3"></div>
                    <table>
                        <tbody>
                        <tr>
                            <td>
                                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                            </td>
                            <td><a href="#">This is FINLAND</a></td>
                        </tr>
                        <tr>
                            <td>
                                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i> <i class="fa fa-star-half-o"></i>
                                <i class="fa fa-star-o"></i>
                            </td>
                            <td><a href="#">Public Storage Canada</a></td>
                        </tr>
                        <tr>
                            <td>
                                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                            </td>
                            <td><a href="#">Bloomberg Professional</a></td>
                        </tr>
                        <tr>
                            <td>
                                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                            </td>
                            <td><a href="#">Ringling Bros. and </a></td>
                        </tr>
                        <tr>
                            <td>
                                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                            </td>
                            <td><a href="#">The Official Star Wars Blog</a></td>
                        </tr>
                        <tr>
                            <td>
                                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                            </td>
                            <td><a href="#">US Air Force General Chuck Yeager</a></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /.top rated  -->
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-3">
                <div class="footer-box footer-logo-address">
                    <!-- address  -->
                    <img src="images/footer-logo.png" class="img-responsive" alt="">
                    <address>
                        14L.E Goulburn St, Sydney 2000NSW
                        <br> Tell: 01922296392
                        <br> Email: <a href="https://news365htmllatest.bdtask.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="c5a7a1b1a4b6ae85a2a8a4aca9eba6aaa8">[email&#160;protected]</a>
                    </address>
                </div>
                <!-- /.address  -->
            </div>
            <div class="col-sm-3">
                <div class="footer-box">
                    <h3 class="category-headding">categories</h3>
                    <div class="headding-border bg-color-4"></div>
                    <ul>
                        <li><i class="fa fa-dot-circle-o"></i><a href="#">Newsletter</a></li>
                        <li><i class="fa fa-dot-circle-o"></i><a href="#">Pressroom</a></li>
                        <li><i class="fa fa-dot-circle-o"></i><a href="#">Advertise online</a></li>
                        <li><i class="fa fa-dot-circle-o"></i><a href="#">Language</a></li>
                        <li><i class="fa fa-dot-circle-o"></i><a href="#">Being Part</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="footer-box">
                    <h3 class="category-headding">POPULAR CATEGORY</h3>
                    <div class="headding-border bg-color-5"></div>
                    <ul>
                        <li><i class="fa fa-dot-circle-o"></i><a href="#">Digital Edition</a></li>
                        <li><i class="fa fa-dot-circle-o"></i><a href="#">Site Map</a></li>
                        <li><i class="fa fa-dot-circle-o"></i><a href="#">About Ads</a></li>
                        <li><i class="fa fa-dot-circle-o"></i><a href="#">Give a Gift</a></li>
                        <li><i class="fa fa-dot-circle-o"></i><a href="#">About Us</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="footer-box">
                    <h3 class="category-headding ">POPULAR CATEGORY</h3>
                    <div class="headding-border"></div>
                    <ul>
                        <li><i class="fa fa-dot-circle-o"></i><a href="#">Newsletter</a></li>
                        <li><i class="fa fa-dot-circle-o"></i><a href="#">Pressroom</a></li>
                        <li><i class="fa fa-dot-circle-o"></i><a href="#">Advertise online</a></li>
                        <li><i class="fa fa-dot-circle-o"></i><a href="#">Language</a></li>
                        <li><i class="fa fa-dot-circle-o"></i><a href="#">Being Part</a></li>
                    </ul>
                </div>
            </div>
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
</body>

</html>
