<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <title>
        Admin
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport'/>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css"/>

    <!-- CSS Files -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('backend/css/now-ui-dashboard.css')}}" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.css" rel="stylesheet">
    <link href="{{asset('backend/css/main.css')}}" rel="stylesheet"/>
</head>

<body class="">
<div class="preloader">
    <img src="{{asset('images/preloader.gif')}}" alt="">
</div>
<div class="wrapper ">
    {{--    sidebar--}}
    <div class="sidebar">
        <div class="logo">
            <a href="http://www.creative-tim.com" class="simple-text logo-mini">
                CT
            </a>
            <a href="http://www.creative-tim.com" class="simple-text logo-normal">
                Creative Tim
            </a>
        </div>
        <div class="sidebar-wrapper" id="sidebar-wrapper">
            <ul class="nav">
                <li class="@if(\Request::is('admin')) active @endif">
                    <a href="{{route('dashboard')}}">
                        <i class="now-ui-icons design_app"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="@if(\Request::is('category/*')) active @endif">
                    <a href="{{route('category.index')}}">
                        <i class="now-ui-icons design_bullet-list-67"></i>
                        <p>Categories</p>
                    </a>
                </li>
                <li class="@if(\Request::is('subcategory/*')) active @endif">
                    <a href="{{route('subcategory.index')}}">
                        <i class="now-ui-icons design_bullet-list-67"></i>
                        <p>Subcategories</p>
                    </a>
                </li>
                <li class="@if(\Request::is('post/*')) active @endif">
                    <a href="{{route('post.index')}}">
                        <i class="now-ui-icons education_paper"></i>
                        <p>Posts</p>
                    </a>
                </li>
                <li class="@if(\Request::is('tag/*')) active @endif">
                    <a href="{{route('tag.index')}}">
                        <i class="now-ui-icons shopping_tag-content"></i>
                        <p>Tags</p>
                    </a>
                </li>
                <li class="@if(\Request::is('headline/*')) active @endif">
                    <a href="{{route('headline.index')}}">
                        <i class="now-ui-icons text_align-left"></i>
                        <p>Headlines</p>
                    </a>
                </li>
                <li class="@if(\Request::is('journalist/*')) active @endif">
                    <a href="{{route('journalist.index')}}">
                        <i class="now-ui-icons users_single-02"></i>
                        <p>Journalist</p>
                    </a>
                </li>
                <li class="@if(\Request::is('subscriber/*')) active @endif">
                    <a href="{{route('subscriber.index')}}">
                        <i class="now-ui-icons users_circle-08"></i>
                        <p>Subscriber</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-panel" id="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg  bg-primary  navbar-absolute">
            <div class="container-fluid">
                <div class="navbar-wrapper">
                    <div class="navbar-toggle">
                        <button type="button" class="navbar-toggler">
                            <span class="navbar-toggler-bar bar1"></span>
                            <span class="navbar-toggler-bar bar2"></span>
                            <span class="navbar-toggler-bar bar3"></span>
                        </button>
                    </div>
                    <a class="navbar-brand" href="#pablo">Dashboard</a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
                        aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navigation">
                    <form>
                        <div class="input-group no-border">
                            <input type="text" value="" class="form-control" placeholder="Search...">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <i class="now-ui-icons ui-1_zoom-bold"></i>
                                </div>
                            </div>
                        </div>
                    </form>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#pablo">
                                <i class="now-ui-icons media-2_sound-wave"></i>
                                <p>
                                    <span class="d-lg-none d-md-block">Stats</span>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown">
                                <i class="now-ui-icons location_world"></i>
                                <p>
                                    <span class="d-lg-none d-md-block">Some Actions</span>
                                </p>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#">Action work</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown">
                                <i class="now-ui-icons users_single-02"></i>
                                <p>
                                    <span class="d-lg-none d-md-block">Account</span>
                                </p>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right ac_drop">
                                <a class="dropdown-item" href="#"><i class="fas fa-user ac_drop-icon mr-3"></i> View profile</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-users-cog ac_drop-icon mr-2 pr-1 "></i> edit profile</a>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="fas fa-sign-in-alt ac_drop-icon mr-3"></i> Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="content-wrap mt-5 pt-5">
            @yield('content')
        </div>
    </div>
</div>
<!--   Core JS Files   -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('backend/js/perfect-scrollbar.jquery.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
<script src="{{asset('backend/js/chartjs.min.js')}}"></script>
<script src="{{asset('backend/js/bootstrap-notify.js')}}"></script>
<script src="{{asset('backend/js/now-ui-dashboard.js')}}" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
<script src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

{{--<script src="{{asset('backend/js/main.js')}}"></script>--}}
<script !src="">
    // loader
    function loaderShow(){
        $('.preloader').show();
    }
    function loaderHide(){
        $('.preloader').hide();
    }

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

    //alertify confirmation
    $(document).on('click','.delete_btn', function(e){
        e.preventDefault();
        let href = $(this).attr('href');
        alertify.confirm('Confirm Title', 'Confirm Message',
            function(){
                loaderShow();
                window.location = href;
            },
            function(){
                alertify.error('Cancelled')
            }).set('labels', {ok:'Delete!', cancel:'Cancel!'});
    })


    $(document).ready( function () {
        $('#sortableTable').DataTable();
    } );
</script>

@yield('script')
</body>

</html>
