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
                    <h1 class="purchae-head">Frase</h1></div>
                {{--<div class="col-md-5 col-sm-5 col-xs-12"><a href="#" class="btn btn-primary purchase-style pull-right">Purchase now</a></div>--}}
            </div>
        </div>
    </section>
    <!-- Service Section Start-->
    @include('frontend.layouts.sections.services')
            <!-- //Services Section End -->
    </div>
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
                <label class=" text-center"> Comodidad, tecnología y autonomía para los empaquetadores de supermercados.</label>
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
                                            <img class="media-object img-responsive" src="{{ asset('frontend/images/authors/img1.jpg') }}" alt="image">
                                        </a>
                                    </div>
                                </div>
                                <p>
                                    Metrics business-to-business beta bootstrapping virality graphical user interface infrastructure conversion launch party long tail. Strategy virality validation bandwidth creative low hanging fruit long tail
                                    startup
                                    gen-z business plan technology. Strategy termsheet venture stealth non-disclosure agreement accelerator research & development scrum project product management freemium infographic business plan.
                                </p>
                            </div>
                            <div class="tab-pane" id="tab_default_2">
                                <div class="media">
                                    <div class="media-left media-middle tab col-sm-12">
                                        <a href="#">
                                            <img class="media-object img-responsive" src="{{ asset('frontend/images/authors/img2.jpg') }}" alt="image">
                                        </a>
                                    </div>
                                </div>
                                <p>
                                    Branding iteration conversion market sales advisor holy grail entrepreneur backing. Gen-z non-disclosure agreement holy grail business-to-consumer disruptive deployment marketing channels seed money seed round
                                    ramen
                                    pivot social proof. Venture creative metrics focus A/B testing crowdfunding. IPhone scrum project user experience freemium interaction design long tail stealth ownership hackathon crowdfunding investor.
                                </p>
                            </div>
                            <div class="tab-pane" id="tab_default_3">
                                <div class="media">
                                    <div class="media-left media-middle tab col-sm-12">
                                        <a href="#">
                                            <img class="media-object img-responsive" src="{{ asset('frontend/images/authors/img3.jpg') }}" alt="image">
                                        </a>
                                    </div>
                                </div>
                                <p>
                                    Beta analytics startup direct mailing leverage learning curve www.discoverartisans.com business-to-consumer. IPad metrics channels pivot deployment business plan android burn rate hackathon vesting period research
                                    &
                                    development launch party user experience. Seed round freemium value proposition learning curve series A financing funding research & development crowdsource.
                                </p>
                            </div>
                            <div class="tab-pane" id="tab_default_4">
                                <div class="media">
                                    <div class="media-left media-middle tab col-sm-12">
                                        <a href="#">
                                            <img class="media-object img-responsive" src="{{ asset('frontend/images/authors/img4.jpg') }}" alt="image">
                                        </a>
                                    </div>
                                </div>
                                <p>
                                    Paradigm shift twitter pitch research & development venture. Startup partnership www.discoverartisans.com supply chain crowdsource hackathon metrics paradigm shift interaction design influencer holy grail first
                                    mover
                                    advantage ramen validation. User experience founders burn rate learning curve infographic leverage gen-z supply chain first mover advantage.
                                </p>
                            </div>
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
                                <p>In 1972 a crack commando unit was sent to prison by a military court for a crime they didn't commit. These men promptly escaped from a maximum security stockade to the Los Angeles underground. Believe it or not I'm
                                    walking on air. I never thought I could feel so free. Flying away on a wing and a prayer. Who could it be? Believe it or not its just me. Come and knock on our door. We've been waiting for you. Where the kisses are
                                    hers and hers and his. Three's company too. Flying away on a wing and a prayer. Who could it be? Believe it or not its just me. Here's the story of a man named Brady who was busy with three boys of his own. One two
                                    three four five six seven eight Sclemeel schlemazel hasenfeffer incorporated? Till the one day when the lady met this fellow and they knew it was much more than a hunch. Baby if you've ever wondered.
                                </p>
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
                                <p>
                                    In 1972 a crack commando unit was sent to prison by a military court for a crime they didn't commit. These men promptly escaped from a maximum security stockade to the Los Angeles underground. Believe it or not I'm
                                    walking on air. I never thought I could feel so free. Flying away on a wing and a prayer. Who could it be? Believe it or not its just me. Come and knock on our door. We've been waiting for you. Where the kisses are
                                    hers and hers and his. Three's company too. Flying away on a wing and a prayer. Who could it be? Believe it or not its just me. Here's the story of a man named Brady who was busy with three boys of his own. One two
                                    three four five six seven eight Sclemeel schlemazel hasenfeffer incorporated? Till the one day when the lady met this fellow and they knew it was much more than a hunch. Baby if you've ever wondered.
                                </p>
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
                                <p>
                                    In 1972 a crack commando unit was sent to prison by a military court for a crime they didn't commit. These men promptly escaped from a maximum security stockade to the Los Angeles underground. Believe it or not I'm
                                    walking on air. I never thought I could feel so free. Flying away on a wing and a prayer. Who could it be? Believe it or not its just me. Come and knock on our door. We've been waiting for you. Where the kisses are
                                    hers and hers and his. Three's company too. Flying away on a wing and a prayer. Who could it be? Believe it or not its just me. Here's the story of a man named Brady who was busy with three boys of his own. One two
                                    three four five six seven eight Sclemeel schlemazel hasenfeffer incorporated? Till the one day when the lady met this fellow and they knew it was much more than a hunch. Baby if you've ever wondered.
                                </p>
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
                        <h4 class="border-success"><span class="heading_border bg-success">Acerca de nosotros</span></h4>
                    </div>
                </div>
                <img src="{{ asset('frontend/images/image_11.jpg') }}" class="img-responsive">

                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type
                    specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                    passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>

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
