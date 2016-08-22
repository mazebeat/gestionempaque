@extends('frontend.layouts.default')

@section('style')
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/aboutus.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/vendors/owl-carousel/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/vendors/owl-carousel/owl.theme.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/vendors/devicon/devicon.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/vendors/devicon/devicon-colors.css') }}">
@endsection

@section('content')
    <!-- Slider Section Start -->
    <div class="row">
        <!-- Left Heading Section Start -->
        <div class="col-md-7 col-sm-12">
            <h2><label>Bienvenido a <strong>Gestión Empaques</strong></label></h2>

            <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                scrambled it to make a type
                specimen book.
            </p>

            <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s.
            </p>

            <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s.Lorem ipsum dolor sit amet, consectetur adipisicing
                elit. Corrupti atque, tenetur
                quam aspernatur corporis at explicabo nulla dolore necessitatibus doloremque exercitationem
            </p>
        </div>
        <!-- //Left Heaing Section End -->
        <!-- Slider Start -->
        <div class="col-md-5 col-sm-12 slider">
            <div id="owl-demo" class="owl-carousel owl-theme">
                <div class="item"><img src="{{ asset('frontend/images/image_16.jpg') }}" alt="slider-image">
                </div>
                <div class="item"><img src="{{ asset('frontend/images/image_17.jpg') }}" alt="slider-image">
                </div>
                <div class="item"><img src="{{ asset('frontend/images/image_16.jpg') }}" alt="slider-image">
                </div>
            </div>
        </div>
        <!-- //Slider End -->
    </div>
    <!-- //Slider Section End -->
    <!-- Services Section Start -->
    {{--@include('frontend.layouts.sections.services')--}}

    <div class="row">
        <div class="text-center">
            <h3 class="border-primary"><span class="heading_border bg-primary">Servicios</span></h3>
        </div>
        <!-- left Section Start -->
        <div class="col-md-12 col-sm-12">
            <p>Arriendo de plataforma web para empaquetadores de supermercados.</p>

            <p>Soporte para toma de horarios de trabajo para empaques.</p>

            <p>Plataforma web para administración de empaques en los supermercados.</p>

            <p>Plataforma para empaques de supermercados de manera independiente.</p>
        </div>
        <!-- Left Section End -->
    </div>

    <div class="row">
        <div class="text-center">
            <h3 class="border-warning"><span class="heading_border bg-warning">Características</span></h3>
        </div>
        <!-- left Section Start -->
        <div class="col-md-12 col-sm-12">
            <p>Como funciona.</p>

            <p>Cuanto cuesta.</p>

            <p>Como hacerlo.</p>

            <p>Contacto.</p>

            <p>Video tutorial.</p>
        </div>
        <!-- Left Section End -->
    </div>


    <!-- // Services Section End -->
    <!-- Our Team Section Start -->
    {{--@include('frontend.layouts.sections.team')--}}
    <!-- //Our Team Section End -->
@endsection

@section('script')
    <script type="text/javascript" src="{{ asset('frontend/vendors/owl-carousel/owl.carousel.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/carousel.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/aboutus.js') }}"></script>
@endsection