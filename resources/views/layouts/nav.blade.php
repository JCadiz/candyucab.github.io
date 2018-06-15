<header class="header_area">
            <!-- Top Header Area Start -->

            <!-- menu real -->
            <div class="main_header_area">
                <div class="container h-100">
                    <div class="row h-100">
                        <div class="col-12 d-md-flex justify-content-between">

                            <!-- Logo Empresa -->
                                <div class="top_logo">
                                    <a href="{{ route('home')}}"><img src="{{asset('img/logo.jpg') }}" width="95px" height="95px"></a>
                                </div>


                            <!-- redes sociales en el menu -->
                            <div class="header-social-area">
                                <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
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
