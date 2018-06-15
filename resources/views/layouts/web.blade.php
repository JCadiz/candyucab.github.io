<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- titulo  -->
    <title>@yield('title', 'CandyUcab')</title>

    <!-- Favicon  -->
    <link rel="icon" href="{{ asset('logoicon.ico ')}}" >

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="{{ asset('css/core-style.css')}} ">



    <!-- Responsive CSS -->
    <link href="{{ asset('css/responsive.css')}} " rel="stylesheet">
    <link href="{{ asset('css/style.css ') }}" rel="stylesheet">

</head>

<body onclick="detenerG()">

    <div id="wrapper">

        <!-- ****** Header Area Start ****** -->
        @include('layouts.nav')
        <!-- ****** Header Area End ****** -->

        <!-- ****** Welcome Slides Area Start ****** -->
        @yield('slider')
        <!-- ****** Welcome Slides Area End ****** -->

        @yield('content')

        <!-- ****** Footer Area Start ****** -->
        @include('layouts.footer')
        <!-- ****** Footer Area End ****** -->
    </div>
    <!-- /.wrapper end -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="{{ asset('js/jquery/jquery-2.2.4.min.js')}} "></script>
    <!-- Popper js -->
    <script src="{{ asset('js/popper.min.js')}} "></script>
    <!-- Bootstrap js -->
    <script src="{{ asset('js/bootstrap.min.js')}} "></script>
    <!-- Plugins js -->
    <script src="{{ asset('js/plugins.js')}} "></script>
    <!-- Active js -->
    <script src="{{ asset('js/active.js')}} "></script>
    <!-- Video js -->
    <script src="{{ asset('js/video.js') }}"></script>
</body>

</html>
