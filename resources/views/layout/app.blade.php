<!DOCTYPE html>
<html dir="rtl" lang="fa_IR">

<head>
    <!-- Document Meta
    ============================================= -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--IE Compatibility Meta-->
    <meta name="author" content="zytheme" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="@yield('page.description')">
    <meta name="keywords" content="@yield('page.keywords')">
    <link href="{{asset('assets/images/favicon/favicon.png')}}" rel="icon">

    <!-- Fonts
    ============================================= -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i%7CPoppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- Stylesheets
    ============================================= -->
    <link href="{{asset('assets/css/external.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->

    <!-- Document Title
    ============================================= -->
    <title>@yield('title')</title>
</head>

<body>
    <div id="wrapper" class="wrapper clearfix">
        @section('header')
        @yield('page-header-title')
        @show


        @yield('content')

        @section('footer')

        @show
    </div>
    <script src="{{asset('assets/js/jquery-2.2.4.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins.js')}}"></script>
    @stack('footer.scripts')
    <script src="{{asset('assets/js/functions.js')}}"></script>
</body>

</html>