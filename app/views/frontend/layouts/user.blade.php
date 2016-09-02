<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    {{--<meta name="viewport" content="width=device-width, initial-scale=1">--}}
    <title>
        @section('title')
            Inicio | Gestión Empaques.
        @show
    </title>
    <!--global css starts-->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/non-responsive.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/custom.css') }}">
    <!--end of global css-->
    <!--page level css starts-->
@yield('style')
<!--end of page level css-->
</head>

<body>
<!-- Header Start -->
<header>
    <!-- Icon Section Start -->
    <div class="icon-section">
        <div class="container">
            {{--            @include('frontend.layouts.modules.socialicons')--}}
            @include('frontend.layouts.modules.navbar')
        </div>
    </div>
    <!-- //Icon Section End -->

    <!-- Nav bar Start -->
{{--<section id="mainnavbar">--}}
{{--@include('frontend.layouts.modules.navbar')--}}
{{--</section>--}}
<!-- Nav bar End -->
</header>
<!-- //Header End -->

<!--Carousel Start -->
<section id="carousel">
    {{--    @include('frontend.layouts.modules.carousel')--}}
</section>
<!-- //Carousel End -->

<!-- Container Start -->
<div class="container-fluid">
    <div class="row" style="color:#000;">
        <div class="col-xs-2">
            <div class="sidebar-nav">
                <div class="navbar navbar-invert" role="navigation">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target=".sidebar-navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <span class="visible-xs navbar-brand">Sidebar menu</span>
                    </div>
                    <div class="navbar-collapse collapse sidebar-navbar-collapse">
                        <ul class="nav navbar-nav sidemenu">
                            <li class=""><a href="{{ url('user') }}">Inicio</a></li>
                            <li class=""><a
                                        href="{{ url('taketurn', Auth::user() != null ? Auth::user()->id : null) }}">Toma
                                    Turnos</a></li>
                            <li class=""><a href="{{ url('repechaje') }}">Repechaje</a></li>
                            <li class=""><a href="#">Mis Turnos</a></li>
                            <li class=""><a href="#">Reemplazos</a></li>
                            {{--<li><a href="#">Menu Item 2</a></li>--}}
                            {{--<li class="dropdown">--}}
                            {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>--}}
                            {{--<ul class="dropdown-menu">--}}
                            {{--<li><a href="#">Action</a></li>--}}
                            {{--<li><a href="#">Another action</a></li>--}}
                            {{--<li><a href="#">Something else here</a></li>--}}
                            {{--<li class="divider"></li>--}}
                            {{--<li class="dropdown-header">Nav header</li>--}}
                            {{--<li><a href="#">Separated link</a></li>--}}
                            {{--<li><a href="#">One more separated link</a></li>--}}
                            {{--</ul>--}}
                            {{--</li>--}}
                            <li><a href="#">Mensaje Directo</a></li>
                            <li><a href="#">Imprimir Credencial</a></li>
                            <li><a href="{{ url('normas') }}">Normas Supermercados</a></li>
                            <li><a href="#">Planilla</a></li>
                            {{--<li><a href="#">Reviews <span class="badge">1,118</span></a></li>--}}
                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>
        <div class="col-xs-10">
            @if(Auth::check())
                <a href="{{ url('logout') }}" class="btn-link pull-right">
                    {{ Auth::user()->nombre }}
                    <i class="fa fa-hand-spock-o" aria-hidden="true"></i> LogOut!
                </a>
            @endif
            @yield('content')
        </div>
    </div>
</div>
<!-- //Container End -->
<!-- Footer Section Start -->
<footer>
    @include('frontend.layouts.modules.footer')
</footer>
<!-- //Footer Section End -->
<!-- Copy right Section Start -->
<div class="copyright">
    <div class="container">
        <p>Copyright &copy; SNT-Consultores, {{ \Carbon::now()->year }}</p>
    </div>
</div>
<!-- Copy right Section End -->
<a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Return to top"
   data-toggle="tooltip" data-placement="left">
    <i class="livicon" data-name="plane-up" data-size="18" data-loop="true" data-c="#fff" data-hc="white"></i>
</a>
<!--global js starts-->
{{--<script type="text/javascript" src="{{ asset('frontend/js/jquery.min.js') }}"></script>--}}
<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script type="text/javascript" src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
{{--<script type="text/javascript" src="{{ asset('frontend/js/raphael.js') }}"></script>--}}
{{--<script type="text/javascript" src="{{ asset('frontend/js/livicons-1.4.min.js') }}"></script>--}}
{{--<script type="text/javascript" src="{{ asset('frontend/js/josh_frontend.js') }}"></script>--}}
<!--global js end-->
<!-- page level js starts-->
@yield('script')
<!--page level js ends-->
</body>
</html>