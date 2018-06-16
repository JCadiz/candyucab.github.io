<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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
<body>

    <div class="catagories-side-menu">
        <!-- Close Icon -->
        <div id="sideMenuClose">
            <i class="ti-close"></i>
        </div>
        <!--  Side Nav  -->
        <div class="nav-side-menu">
            <div class="menu-list">
                <h6>Categories</h6>
                <ul id="menu-content" class="menu-content collapse out">
                    <!-- Single Item -->
                    <li data-toggle="collapse" data-target="#women" class="collapsed active">
                        <a href="#">Woman wear <span class="arrow"></span></a>
                        <ul class="sub-menu collapse" id="women">
                            <li><a href="#">Midi Dresses</a></li>
                            <li><a href="#">Maxi Dresses</a></li>
                            <li><a href="#">Prom Dresses</a></li>
                            <li><a href="#">Little Black Dresses</a></li>
                            <li><a href="#">Mini Dresses</a></li>
                        </ul>
                    </li>
                    <!-- Single Item -->
                    <li data-toggle="collapse" data-target="#man" class="collapsed">
                        <a href="#">Man Wear <span class="arrow"></span></a>
                        <ul class="sub-menu collapse" id="man">
                            <li><a href="#">Man Dresses</a></li>
                            <li><a href="#">Man Black Dresses</a></li>
                            <li><a href="#">Man Mini Dresses</a></li>
                        </ul>
                    </li>
                    <!-- Single Item -->
                    <li data-toggle="collapse" data-target="#kids" class="collapsed">
                        <a href="#">Children <span class="arrow"></span></a>
                        <ul class="sub-menu collapse" id="kids">
                            <li><a href="#">Children Dresses</a></li>
                            <li><a href="#">Mini Dresses</a></li>
                        </ul>
                    </li>
                    <!-- Single Item -->
                    <li data-toggle="collapse" data-target="#bags" class="collapsed">
                        <a href="#">Bags &amp; Purses <span class="arrow"></span></a>
                        <ul class="sub-menu collapse" id="bags">
                            <li><a href="#">Bags</a></li>
                            <li><a href="#">Purses</a></li>
                        </ul>
                    </li>
                    <!-- Single Item -->
                    <li data-toggle="collapse" data-target="#eyewear" class="collapsed">
                        <a href="#">Eyewear <span class="arrow"></span></a>
                        <ul class="sub-menu collapse" id="eyewear">
                            <li><a href="#">Eyewear Style 1</a></li>
                            <li><a href="#">Eyewear Style 2</a></li>
                            <li><a href="#">Eyewear Style 3</a></li>
                        </ul>
                    </li>
                    <!-- Single Item -->
                    <li data-toggle="collapse" data-target="#footwear" class="collapsed">
                        <a href="#">Footwear <span class="arrow"></span></a>
                        <ul class="sub-menu collapse" id="footwear">
                            <li><a href="#">Footwear 1</a></li>
                            <li><a href="#">Footwear 2</a></li>
                            <li><a href="#">Footwear 3</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div id="wrapper">
        <header class="header_area">

            <!-- menu real -->
            <div class="main_header_area">
                <div class="container h-100">
                    <div class="row h-100">
                        <div class="col-12 d-md-flex justify-content-between">

                            <!-- Logo Empresa -->
                                <div class="top_logo">
                                    <a href="{{ route('home')}}"><img src="{{asset('img/logo.jpg') }}" width="95px" height="95px"></a>
                                </div>

                            <!-- Menu Central -->
                            <div class="main-menu-area">
                                <nav class="navbar navbar-expand-lg align-items-start">

                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#karl-navbar" aria-controls="karl-navbar" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"><i class="ti-menu"></i></span></button>

                                    <div class="collapse navbar-collapse align-items-start collapse" id="karl-navbar">
                                        <ul class="navbar-nav animated" id="nav">
                                            <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                                            <li class="nav-item"><a class="nav-link" href="{{ route('novedades') }}">Novedades</a></li>
                                            <li class="nav-item"><a class="nav-link" href="{{ route('tienda') }}">Tienda</a></li>
                                            <li class="nav-item"><a class="nav-link" href="{{ route('promociones') }}">Promociones</a></li>

                                            @guest()
                                            <li class="dropdown nav-item">
                                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                 Ingrese</a>
                                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                   <a class="nav-link" href="{{ route('login') }}"> Login</a>
                                                   <a class="nav-link" href="{{ route('register') }}"> Register</a>
                                                </div>
                                            </li>
                                            @else
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                {{ Auth::user()->name }}
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                 @if($rol == 'admin')
                                                 <a class="nav-link" href="{{ route('tienda2') }}">Admin Tiendas</a>
                                                 <a class="nav-link" href="{{ route('natural') }}">Admin Natural</a>
                                                 <a class="nav-link" href="{{ route('juridico') }}">Admin Juridico</a>
                                                 <a class="nav-link" href="{{ route('oferta2') }}">Admin Ofertas</a>
                                                 <a class="nav-link" href="{{ route('prueba2') }}">Admin Productos</a>
                                                 <a class="nav-link" href="{{ route('candy2') }}">Admin CandyPoints</a>
                                                @endif
                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();document.getElementById('logout').submit();">
                                                    Logout</a>
                                                <form action="{{ route('logout') }}" id="logout" method="post">
                                                    {!! csrf_field() !!}
                                                </form>

                                                </div>
                                            </li>
                                            @endguest
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <main class="py-2">
            @yield('content')
        </main>

         <!-- ****** Footer Area Start ****** -->
        @include('layouts.footer')
        <!-- ****** Footer Area End ****** -->
    </div>


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
