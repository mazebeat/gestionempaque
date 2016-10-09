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
        {{--<div class="col-md-7 col-sm-12">--}}
        <div class="col-md-12 col-sm-12">
            <h2><label>Bienvenido a <strong>Gestión Empaques</strong></label></h2>

            <span class="col-xs-7">
                <img class="media-object img-responsive" src="{{ asset('frontend/images/alan/imagen3.png') }}" alt="image">
            </span>

            <p>Gestión empaques es una agrupación de estudiantes de educación superior que se desempeñan como empaquetadores de supermercado y se ha dispuesto a entregar soluciones integrales a través de esta plataforma para así mejorar y facilitar esta labor llena de sacrificio y entrega que permite a miles de estudiantes de educación superior generar ingreso económico para así costear sus carreras y mantener a sus
                familias.</p>

            <p>Nos hemos propuesto como agrupación a entregar un servicio de excelencia y de calidad, diseñado en base a las necesidades actuales de los empaquetadores de supermercado y así generar una plusvalía en esta labor.</p>

            <p>Nuestra visión es a futuro lograr comunicar nuestros servicios y dar a conocer nuestra propuesta en todo chile y así ser un real aporte a nivel nacional logrando eliminar de una vez por todas los abusos y cobros excesivos realizados por las mal llamadas “empresas de empaques”.</p>
        {{--</div>--}}
        <!-- //Left Heaing Section End -->
            <!-- Slider Start -->
            {{--<div class="col-md-5 col-sm-12 slider">--}}
            {{--<div id="owl-demo" class="owl-carousel owl-theme">--}}
            {{--<div class="item"><img src="{{ asset('frontend/images/image_16.jpg') }}" alt="slider-image">--}}
            {{--</div>--}}
            {{--<div class="item"><img src="{{ asset('frontend/images/image_17.jpg') }}" alt="slider-image">--}}
            {{--</div>--}}
            {{--<div class="item"><img src="{{ asset('frontend/images/image_16.jpg') }}" alt="slider-image">--}}
            {{--</div>--}}
            {{--</div>--}}
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
            <p>Al asociarse con gestión empaques tendrá un sinfín de beneficios y podrá realizar distintas actividades a través de nuestra plataforma tales como:</p>
            <ol class="">
                <li>Organizarse de mejor manera y generar una mayor cohesión como agrupación.</li>
                <li>Asignar roles a través de la plataforma web.</li>
                <li>Reservar horarios de trabajo semanal y mensualmente.</li>
                <li>Podrán generar un reglamento interno para poder llevar un orden dentro de su agrupación.</li>
                <li>Gestión empaques les facilita un formato standar de credencial para portar durante su trabajo.</li>
                <li>Podrán tener acceso todos los empaques a las planillas de horarios de trabajo para una mayor transparencia.</li>
                <li>En realidad pueden solicitar el servicio como estimen pertinente bajo sus propios requerimientos y así habilitar la plataforma de acuerdo a sus necesidades.</li>
                <li>Los listados de asistencia pueden ser revisados de forma impresa o también de forma digital sin la necesidad de imprimir una planilla.</li>
                <li>También como lo habíamos señalado anteriormente gestión empaques otorga asistencia jurídica en el caso de que los asociados sufran algún inconveniente con la administración o gerencia del retail en el cual se emplean. Nosotros como agrupación entregamos este servicio de asesoría para que las agrupaciones independientes puedan desenvolverse de mejor forma en situaciones de carácter adverso en sus
                    actividades laborales si así lo requiere.
                </li>
            </ol>
        </div>
        <!-- Left Section End -->
    </div>

    <div class="row">
        <div class="text-center">
            <h3 class="border-warning"><span class="heading_border bg-warning">Características</span></h3>
        </div>
        <!-- left Section Start -->
        <div class="col-md-12 col-sm-12">
            <p>Esta plataforma fue diseñada para la autoadministración de las agrupaciones de empaquetadores independientes que trabajan en los distintos retail del país. Esta plataforma es una herramienta que se entrega en forma completa a sus socios para que desarrollen sus actividades de acuerdo a sus propias necesidades.</p>
            <h4>Como funciona:</h4>
            <p>Lo primero es contactarnos para así agendar una reunión en el cual podamos presentar de forma íntegra y completa nuestros servicios y sus características.
                Luego si les interesa el producto desarrollamos una inducción de nuestra plataforma sobre el uso de todas sus funciones y características (esta inducción puede ser para las personas que estimen pertinentes como grupo) .
                Finalmente habilitamos la plataforma para el local a asociar y realizamos dos semanas de pruebas para que los empaquetadores puedan entrenar un poco el método de uso y funcionamiento.</p>
        </div>
        <div class="col-md-12 col-sm-12">
            <h4>Cuanto cuesta:</h4>
            <p>Gestión empaques entrega sus servicios por adhesión asignando un valor unitario por empaquetador mensual de <strong>$1.000 mensuales</strong>.</p>
        </div>
        <span class="col-xs-2 col-xs-offset-5 text-center"><img class="media-object img-responsive" src="{{ asset('frontend/images/alan/PRECIO.png') }}" alt="image">                </span>
        <div class="col-md-12 col-sm-12">
            <p>Este valor puede ser modificado si los requerimientos de los asociados los estiman pertinente y se llega a acuerdo entre las dos partes a beneficiar (la modificación de este valor asignado siempre se realizara en disminución y nunca en aumento a lo ya señalado, este valor asignado de $1000 pesos es el valor base y valor máximo por el servicio).</p>
            <p>Contáctenos al mail <a href="mailto:{{ Config::get('contact.email') }}">{{ Str::upper(Config::get('contact.email')) }}</a> o al teléfono 942893664 y le responderemos a la brevedad cualquier duda o consulta que presente.</p>
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