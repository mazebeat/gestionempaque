<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    {{--<meta name="viewport" content="width=device-width, initial-scale=1">--}}
    <title>@section('title')Inicio | Gestión Empaques.@show@</title>
    <!--global css starts-->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/bootstrap.min.css') }}">
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
@if(Session::has('message') && Session::has('type'))
    <div class="col-xs-8 col-xs-offset-2">
        <div class="alert alert-{{ Session::get('type', 'danger') }}" role="alert" id="messagefront">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>Mensaje: </strong> {{ Session::get('message') }}
        </div>
    </div>
@endif

<!--Carousel Start -->
<section id="carousel">
    @include('frontend.layouts.modules.carousel')
</section>
<!-- //Carousel End -->

<!-- Container Start -->
<div class="container">
    @yield('content')
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
<script type="text/javascript" src="{{ asset('frontend/js/raphael.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/js/livicons-1.4.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/js/josh_frontend.js') }}"></script>
<!--global js end-->
<!-- page level js starts-->
@yield('script')
@if(Session::has('message'))
    <script type="text/javascript">
        $(function () {
            $('#messagefront').delay(1500).slideUp(1000);
        });
    </script>
@endif
<!--page level js ends-->
</body>
</html>