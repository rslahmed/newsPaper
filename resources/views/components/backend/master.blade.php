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
    <x-backend.partials.sidebar />
    <div class="main-panel" id="main-panel">
        <!-- Navbar -->
        <x-backend.partials.navbar />

        <div class="content-wrap mt-5 pt-5">
            {{$slot}}
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
@isset($script)
    {{ $script }}
@endisset
</body>

</html>
