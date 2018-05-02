<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Welcome To | Bootstrap Based Admin Template - Material Design</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    {{--<link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">--}}
    <link href="{{url('/')}}/css/icon.css" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="{{url('/')}}/css/bootstrap.min.css" rel="stylesheet">

<!-- Animation Css -->
    <link href="{{url('/')}}/css/animate.min.css" rel="stylesheet" />

<!-- Custom Css -->
    <link href="{{url('/')}}/css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="{{url('/')}}/css/theme-blue.css" rel="stylesheet" />
</head>

<body class="theme-blue">
<!-- Page Loader -->
{{--<div class="page-loader-wrapper">--}}
{{--<div class="loader">--}}
{{--<div class="preloader">--}}
{{--<div class="spinner-layer pl-red">--}}
{{--<div class="circle-clipper left">--}}
{{--<div class="circle"></div>--}}
{{--</div>--}}
{{--<div class="circle-clipper right">--}}
{{--<div class="circle"></div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--<p>Please wait...</p>--}}
{{--</div>--}}
{{--</div>--}}
<!-- #END# Page Loader -->
<!-- Overlay For Sidebars -->
<div class="overlay"></div>
<!-- #END# Overlay For Sidebars -->
<!-- Search Bar -->
<div class="search-bar">
    <div class="search-icon">
        <i class="material-icons">search</i>
    </div>
    <input type="text" placeholder="TÌM KIẾM...">
    <div class="close-search">
        <i class="material-icons">close</i>
    </div>
</div>

@include('partial.navbar')
<!-- #Top Bar -->
@include('partial.sidebar')

@hasSection('content')
    @yield('content')
@else
    Có lỗi trong quá trình đọc nội dung...
@endif

<!-- Jquery Core Js -->
<script src="{{url('/')}}/js/jquery.min.js"></script>

<!-- Bootstrap Core Js -->
<script src="{{url('/')}}/js/bootstrap.min.js"></script>


<!-- Custom Js -->
<script src="{{url('/')}}/js/admin.js"></script>

</body>

</html>