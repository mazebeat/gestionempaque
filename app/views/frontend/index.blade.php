@extends('frontend.layouts.default2')

@section('style')
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/tabbular.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/jquery.circliful.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/vendors/owl-carousel/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/vendors/owl-carousel/owl.theme.css') }}">
@endsection

@section('content')


    <section class="purchas-main">
        <div class="container bg-border">
            <div class="row">
                <div class="col-md-7 col-sm-7 col-xs-12">
                    <h1 class="purchae-head">Si puedes soñarlo puedes hacerlo; nosotros ya lo soñamos y ahora trabajamos en hacerlo.</h1></div>
                {{--<div class="col-md-5 col-sm-5 col-xs-12"><a href="#" class="btn btn-primary purchase-style pull-right">Purchase now</a></div>--}}
            </div>
        </div>
    </section>
    <!-- Service Section Start-->
    @include('frontend.layouts.sections.services')
    <!-- //Services Section End -->
    {{--</div>--}}
    <!-- Layout Section Start -->
    {{--<section class="feature-main">--}}
    {{--<div class="container">--}}
    {{--<div class="row">--}}

    {{--<div class="col-md-9 col-sm-9 col-xs-12">--}}
    {{--<div class="layout-image">--}}
    {{--<img src="http://ricardocastro.com.mx/imagenes/servicios/icono_empaque.png" class="img-responsive"/>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="col-md-3 col-sm-3 col-xs-12">--}}
    {{--<ul class="list-unstyled pull-right text-right layout-styl">--}}
    {{--<li>--}}
    {{--<i class="livicon" data-name="checked-on" data-size="20" data-loop="true" data-c="#01bc8c" data-hc="#01bc8c"></i> Responsive clean design--}}
    {{--</li>--}}
    {{--<li><i class="livicon" data-name="checked-on" data-size="20" data-loop="true" data-c="#01bc8c" data-hc="#01bc8c"></i> User friendly</li>--}}
    {{--<li><i class="livicon" data-name="checked-on" data-size="20" data-loop="true" data-c="#01bc8c" data-hc="#01bc8c"></i> HTML5</li>--}}
    {{--<li><i class="livicon" data-name="checked-on" data-size="20" data-loop="true" data-c="#01bc8c" data-hc="#01bc8c"></i> CSS3</li>--}}
    {{--<li><i class="livicon" data-name="checked-on" data-size="20" data-loop="true" data-c="#01bc8c" data-hc="#01bc8c"></i> Bootstrap 3.3.4</li>--}}
    {{--</ul>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</section>--}}
    <!-- //Layout Section Start -->
    <!-- Accordions Section End -->
    <div class="container">
        <div class="row">
            <!-- Accordions Start -->
            <div class="text-center">
                <h3 class="border-success"><span class="heading_border bg-success">Gestión Empaques</span></h3>
                <label class=" text-center">Comodidad, tecnología y autonomía para los empaquetadores de supermercados.</label>
            </div>
            <!-- Accordions End -->
            <div class="col-md-6 col-sm-12">
                <!-- Tabbable-Panel Start -->
                <div class="tabbable-panel">
                    <!-- Tabbablw-line Start -->
                    <div class="tabbable-line">
                        <!-- Nav Nav-tabs Start -->
                        <ul class="nav nav-tabs ">
                            <li class="active">
                                <a href="#tab_default_1" data-toggle="tab">
                                    ¿Qué hacemos? </a>
                            </li>
                            <li>
                                <a href="#tab_default_2" data-toggle="tab">
                                    Método </a>
                            </li>
                            <li>
                                <a href="#tab_default_3" data-toggle="tab">
                                    Beneficios </a>
                            </li>
                            {{--<li>--}}
                            {{--<a href="#tab_default_4" data-toggle="tab">--}}
                            {{--Bootstrap </a>--}}
                            {{--</li>--}}
                        </ul>
                        <!-- //Nav Nav-tabs End -->
                        <!-- Tab-content Start -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab_default_1">
                                <div class="media">
                                    <div class="media-left tab col-sm-12">
                                        <a href="#">
                                            <img class="media-object img-responsive"
                                                 src="{{ asset('frontend/images/alan/imagen 1.png') }}" alt="image">
                                        </a>
                                    </div>
                                </div>
                                <p>Gestión empaques ofrece a todas las agrupaciones de empaques independientes la posibilidad de realizar sus reservas de horarios de trabajo mediante nuestra moderna plataforma web la que les entrega comodidad y legitimidad en esta etapa en la que muchas veces suele ser engorrosa, pero, que gracias a nuestra plataforma simplifica de inmejorable manera.</p>
                            </div>
                            <div class="tab-pane" id="tab_default_2">
                                <div class="media">
                                    <div class="media-left media-middle tab col-sm-12">
                                        <a href="#">
                                            <img class="media-object img-responsive"
                                                 src="{{ asset('frontend/images/alan/imagen 2.png') }}" alt="image">
                                        </a>
                                    </div>
                                </div>
                                <p>Lo esencial es que si te interesa nuestra plataforma o solo les causa curiosidad nos contacten, todos sin compromiso, la idea es que luego de contactarnos fijemos una reunión en la cual podremos explicarles cómo funciona todo el sistema, los procesos, las facilidades, lo que ganan con nuestro sistema, sus ventajas  y en lo que les puede beneficiar el asociarse a gestión empaques.</p>
                            </div>
                            <div class="tab-pane" id="tab_default_3">
                                <div class="media">
                                    <div class="media-left media-middle tab col-sm-12">
                                        <a href="#">
                                            <img class="media-object img-responsive"
                                                 src="{{ asset('frontend/images/alan/imagen 3.png') }}" alt="image">
                                        </a>
                                    </div>
                                </div>
                                <p>Gestión empaques les entrega un sinfín de benéficos a las agrupaciones asociadas, tales como </br>
                                    - plataforma web para la reserva de horarios de trabajo, asistencia jurídica, independencia, autonomía, flexibilidad, asistencia 24/7, compromiso, profesionalismo, sinceridad ante todo, legitimización ante sus asociados, etc.
                                </p>
                            </div>
                            {{--<div class="tab-pane" id="tab_default_4">--}}
                                {{--<div class="media">--}}
                                    {{--<div class="media-left media-middle tab col-sm-12">--}}
                                        {{--<a href="#">--}}
                                            {{--<img class="media-object img-responsive"--}}
                                                 {{--src="{{ asset('frontend/images/authors/img4.jpg') }}" alt="image">--}}
                                        {{--</a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<p>--}}
                                    {{--Paradigm shift twitter pitch research & development venture. Startup partnership--}}
                                    {{--www.discoverartisans.com supply chain crowdsource hackathon metrics paradigm shift--}}
                                    {{--interaction design influencer holy grail first--}}
                                    {{--mover--}}
                                    {{--advantage ramen validation. User experience founders burn rate learning curve--}}
                                    {{--infographic leverage gen-z supply chain first mover advantage.--}}
                                {{--</p>--}}
                            {{--</div>--}}
                        </div>
                        <!-- Tab-content End -->
                    </div>
                    <!-- //Tabbablw-line End -->
                </div>
                <!-- Tabbable_panel End -->
            </div>
            <div class="col-md-6 col-sm-12">
                <!-- Panel-group Start -->
                <div class="panel-group" id="accordion">
                    <!-- Panel Panel-default Start -->
                    <div class="panel panel-default">
                        <!-- Panel-heading Start -->
                        <div class="panel-heading text_bg">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                    <span class=" glyphicon glyphicon-minus success"></span>
                                    <span class="success">¿Por qué elegirnos?</span></a>
                            </h4>
                        </div>
                        <!-- //Panel-heading End -->
                        <!-- Collapseone Start -->
                        <div id="collapseOne" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <p>Nuestra pasión se basa en que nos desarrollamos en el mismo rubro, por lo que conocemos sus falencias, las hemos experimentado, por lo que sabemos lo que viven los empaques y a través de este humilde trabajo tratamos de simplificar y mejorar el día a día de los empaquetadores de supermercado.</p>
                            </div>
                        </div>
                        <!-- Collapseone End -->
                    </div>
                    <!-- //Panel Panel-default End -->
                    <div class="panel panel-default">
                        <div class="panel-heading text_bg">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                    <span class=" glyphicon glyphicon-plus success"></span>
                                    <span class="success">¿Por qué elegirnos?</span>
                                </a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>Nuestro compromiso es entregarles una plataforma 100% efectiva y eficiente. Nos comprometemos en que la plataforma siempre será efectiva a la hora de ser utilizada debido a que trabajamos 24/7  para mejorar y perfeccionar nuestros sistemas en base al buen cumplimiento de nuestras políticas ya especificadas en nuestra plataforma.</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading text_bg">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                    <span class=" glyphicon glyphicon-plus success"></span>
                                    <span class="success">¿Por qué elegirnos?</span></a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>Porque pase lo que pase estaremos dispuestos a acompañarlos hasta las últimas instancias sea cual sea el problema que se presente con los retail en cual se desempeñen nuestros asociados, no importa el que sea, nosotros a través de nuestro servicio de asistencia jurídica estaremos ahí para apañarlos.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- //Panle-group End -->
            </div>
        </div>
        <!-- //Accordions Section End -->
        <!-- Our Team Start -->
    {{--@include('frontend.layouts.sections.team')--}}
    <!-- //Our Team End -->
        <!-- What we are section Start -->
        <div class="row">
            <!-- What we are Start -->
        {{--<div class="col-md-6 col-sm-6">--}}
        {{--<div class="text-left">--}}
        {{--<div>--}}
        {{--<h4 class="border-warning"><span class="heading_border bg-warning">What We Are</span></h4>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--<img src="{{ asset('frontend/images/image_12.jpg') }}" class="img-responsive">--}}

        {{--<p>--}}
        {{--Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type--}}
        {{--specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum--}}
        {{--passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.--}}
        {{--</p>--}}

        {{--<p>--}}

        {{--<div class="text-right primary"><a href="#">Leer más</a></div>--}}
        {{--</p>--}}
        {{--</div>--}}
        <!-- //What we are End -->
            <!-- About Us Start -->
            <div class="col-md-12 col-sm-12">
                <div class="text-left">
                    <div>
                        <h4 class="border-success"><span class="heading_border bg-success">Acerca de nosotros</span>
                        </h4>
                    </div>
                </div>
                <img class="media-object img-responsive" src="{{ asset('frontend/images/alan/imagen 1.png') }}" alt="image">

                <p>Somos un grupo de jóvenes que habiendo vivido la experiencia de lo que significa ser empaquetador de supermercado hemos tomado la decisión de desarrollar Gestión empaques. Gestión empaques es una plataforma web la cual facilita la reserva de horarios de trabajo para empaquetadores de supermercados o algún retail.  Entregamos asesoría jurídica para cualquier agrupación asociada que necesite de estos servicios ya que nosotros somos una agrupación que presta servicios hacia y Para los empaques en donde nosotros no nos hacemos dueños de supermercados ni de empaques, esa temática no tiene relación ninguna ni sigue nuestros lineamientos de agrupación, al contrario les entregamos ayuda para poder ordenar y mejorar la calidad del servicio el cual entregan.</p>

                <p>

                <div class="text-right primary"><a href="#">Leer más</a></div>
                </p>
            </div>
            <!-- //About Us End -->
        </div>
        <!-- //What we are section End -->
        <!-- Testimonial Start -->
    {{--<div class="row">--}}
    {{--<!-- Testimonial Section -->--}}
    {{--<div class="text-center">--}}
    {{--<h3 class="border-primary"><span class="heading_border bg-primary">Testimonios</span></h3>--}}
    {{--</div>--}}
    {{--<div class="col-md-4">--}}
    {{--<div class="author">--}}
    {{--<img src="{{ asset('frontend/images/authors/avatar3.jpg') }}" class="img-responsive img-circle pull-left">--}}

    {{--<p class="text-right">--}}
    {{--Persona 1--}}
    {{--<br>--}}
    {{--<small class="text-right">Dato Persona</small>--}}
    {{--</p>--}}
    {{--<p>--}}
    {{--<label>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to--}}
    {{--make a type specimen book."</label>--}}
    {{--</p>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="col-md-4">--}}
    {{--<div class="author">--}}
    {{--<img src="{{ asset('frontend/images/authors/avatar2.jpg') }}" class="img-responsive img-circle pull-left">--}}

    {{--<p class="text-right">--}}
    {{--Persona 2--}}
    {{--<br>--}}
    {{--<small class="text-right">Dato Persona</small>--}}
    {{--</p>--}}
    {{--<p>--}}
    {{--<label>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to--}}
    {{--make a type specimen book."</label>--}}
    {{--</p>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="col-md-4">--}}
    {{--<div class="author">--}}
    {{--<img src="{{ asset('frontend/images/authors/avatar4.jpg') }}" class="img-responsive img-circle pull-left">--}}

    {{--<p class="text-right">--}}
    {{--Persona 3--}}
    {{--<br>--}}
    {{--<small class="text-right">Dato Persona</small>--}}
    {{--</p>--}}
    {{--<p>--}}
    {{--<label>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to--}}
    {{--make a type specimen book."</label>--}}
    {{--</p>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<!-- Testimonial Section End -->--}}
    {{--</div>--}}
    <!-- Testimonial End -->
        <!-- Features Start -->
    {{--<div class="row features">--}}
    {{--<div class="text-center">--}}
    {{--<div class="text-center">--}}
    {{--<h3 class=" border-warning"><span class="heading_border bg-warning">Features</span></h3>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="col-md-4 col-sm-4">--}}
    {{--<div>--}}
    {{--<a href="#"><i class="livicon" data-name="checked-on" data-size="22" data-loop="true" data-c="#25a3d8" data-hc="#25a3d8"></i></a>--}}
    {{--<h4>--}}
    {{--<bold>Responsive Design</bold>--}}
    {{--</h4>--}}
    {{--</div>--}}
    {{--<div>--}}
    {{--<p>--}}
    {{--<label>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to--}}
    {{--make a type specimen book."</label>--}}
    {{--</p>--}}
    {{--</div>--}}
    {{--<div>--}}
    {{--<a href="#"> <i class="livicon" data-name="checked-on" data-size="22" data-loop="true" data-c="#ef8424 " data-hc="#ef8424 "></i>--}}
    {{--</a>--}}
    {{--<h4>--}}
    {{--<bold>Html 5</bold>--}}
    {{--</h4>--}}
    {{--<p>--}}
    {{--<label>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to--}}
    {{--make a type specimen book."</label>--}}
    {{--</p>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="col-md-4 col-sm-4">--}}
    {{--<div>--}}
    {{--<a href="#"> <i class="livicon" data-name="checked-on" data-size="22" data-loop="true" data-c="#01bc8c" data-hc="#01bc8c"></i>--}}
    {{--</a>--}}
    {{--<h4>--}}
    {{--<bold>Unique Design</bold>--}}
    {{--</h4>--}}
    {{--<p>--}}
    {{--<label>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to--}}
    {{--make a type specimen book."</label>--}}
    {{--</p>--}}
    {{--</div>--}}
    {{--<div>--}}
    {{--<a href="#"> <i class="livicon" data-name="checked-on" data-size="22" data-loop="true" data-c="#1360b3 " data-hc="#1360b3 "></i> </a>--}}
    {{--<h4>--}}
    {{--<bold>Css</bold>--}}
    {{--</h4>--}}
    {{--<p><label>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to--}}
    {{--make a type specimen book."</label></p>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="col-md-4 col-sm-4">--}}
    {{--<div>--}}
    {{--<a href="#"> <i class="livicon" data-name="checked-on" data-size="22" data-loop="true" data-c="#FFD43C" data-hc="#FFD43C"></i> </a>--}}
    {{--<h4>Clean Design</h4>--}}

    {{--<p><label>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to--}}
    {{--make a type specimen book."</label></p>--}}
    {{--</div>--}}
    {{--<div>--}}
    {{--<a href="#"> <i class="livicon" data-name="checked-on" data-size="22" data-loop="true" data-c="#91d659 " data-hc="#91d659 "></i> </a>--}}
    {{--<h4>Bootstrap</h4>--}}

    {{--<p><label>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to--}}
    {{--make a type specimen book."</label></p>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    <!-- //Features End -->
        <!-- Our Skills Start -->

        {{--<div class="text-center marbtm10">--}}
        {{--<h3 class="border-danger"><span class="heading_border bg-danger">Our Skills</span></h3>--}}
        {{--</div>--}}
    </div>
    {{--<div class="sliders">--}}
    {{--<!-- Our skill Section start -->--}}
    {{--<div class="container">--}}
    {{--<div class="row">--}}
    {{--<div class="col-md-3 col-sm-6  text-center ">--}}
    {{--<div class="text-center center-block">--}}
    {{--<div id="myStat3" class="center-block" data-startdegree="0" data-dimension="150" data-text="90%" data-width="4" data-fontsize="28" data-percent="90" data-fgcolor="#3abec0" data-bgcolor="#eee"></div>--}}
    {{--<strong class="success">Bootstrap</strong>--}}
    {{--</div>--}}
    {{--<span>Lorem Ipsum is simply dummy text of the printing and type setting industry</span>--}}
    {{--</div>--}}
    {{--<div class="col-md-3 col-sm-6 text-center">--}}
    {{--<div class="text-center center-block">--}}
    {{--<div id="myStat4" class="center-block" data-startdegree="0" data-dimension="150" data-text="60%" data-width="4" data-fontsize="28" data-percent="60" data-fgcolor="#3abec0" data-bgcolor="#eee"></div>--}}
    {{--<strong class="success">Jquery</strong>--}}
    {{--</div>--}}
    {{--<span>Lorem Ipsum is simply dummy text of the printing and typesetting industry</span>--}}
    {{--</div>--}}
    {{--<div class="col-md-3 col-sm-6 text-center">--}}
    {{--<div class="text-center center-block">--}}
    {{--<div id="myStat5" class="center-block" data-startdegree="0" data-dimension="150" data-text="100%" data-width="4" data-fontsize="28" data-percent="100" data-fgcolor="#3abec0" data-bgcolor="#eee"></div>--}}
    {{--<strong class="success">Html 5</strong>--}}
    {{--</div>--}}
    {{--<span>Lorem Ipsum is simply dummy text of the printing and typesetting industry</span>--}}
    {{--</div>--}}
    {{--<div class="col-md-3 col-sm-6 text-center">--}}
    {{--<div class="text-center center-block">--}}
    {{--<div id="myStat6" class="center-block" data-startdegree="0" data-dimension="150" data-text="70%" data-width="4" data-fontsize="28" data-percent="70" data-fgcolor="#3abec0" data-bgcolor="#eee"></div>--}}
    {{--<strong class="success">CSS 3</strong>--}}
    {{--</div>--}}
    {{--<span>Lorem Ipsum is simply dummy text of the printing and typesetting industry</span>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<!-- Our skills Section End -->--}}
    {{--</div>--}}
    {{--<!-- //Our Skills End -->--}}
@endsection

@section('script')
    <script type="text/javascript" src="{{ asset('frontend/js/jquery.circliful.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/vendors/owl-carousel/owl.carousel.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/carousel.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/index.js') }}"></script>
@endsection
