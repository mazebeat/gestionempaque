@extends('frontend.layouts.default')

@section('style')
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/contact.css') }}">
@endsection


@section('content')
    <!-- Breadcrumb Section Start -->
    <div class="breadcum clearfix">
        <ol class="breadcrumb">
            <li>
                <a href="{{ url('')  }}"> <i class="livicon icon3 icon4" data-name="home" data-size="18"
                                             data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i>Inicio
                </a>
            </li>
            <li class="hidden-xs">
                <i class="livicon icon3" data-name="angle-double-right" data-size="18" data-loop="true" data-c="#01bc8c"
                   data-hc="#01bc8c"></i>
                <a href="#">Contacto</a>
            </li>
        </ol>
        <div class="pull-right">
            <i class="livicon icon3" data-name="cellphone" data-size="20" data-loop="true" data-c="#3d3d3d"
               data-hc="#3d3d3d"></i> Contacto
        </div>
    </div>
    <!-- //Breadcrumb Section End -->
    <!-- Map Section Start -->
    <div class="">
        <div id="map" style="width:100%; height:400px;"></div>
    </div>
    <!-- //map Section End -->
    <!-- Container Section Start -->
    <div class="container">
        <div class="row">
            <!-- Contact form Section Start -->
            <div class="col-md-6">
                <h2>Formulario de Contacto</h2>

                <form class="contact">
                    <div class="form-group">
                        <input type="text" class="form-control input-lg" placeholder="Tú nombre">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control input-lg" placeholder="Tú email">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control input-lg no-resize" rows="6"
                                  placeholder="Tú comentario"></textarea>
                    </div>
                    <div class="input-group">
                        <button class="btn btn-primary">Enviar</button>
                        <button class="btn btn-danger">Cancelar</button>
                    </div>
                </form>
            </div>
            <!-- //Conatc Form Section End -->
            <!-- Address Section Start -->
            <div class="col-md-6 col-sm-6">
                <div class="media media-right">
                    <div class="media-left media-top">
                        <a href="#">
                            <div class="box-icon">
                                <i class="livicon" data-name="home" data-size="22" data-loop="true" data-c="#fff"
                                   data-hc="#fff"></i>
                            </div>
                        </a>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Dirección:</h4>

                        <div class="danger">Alan</div>
                        <address>
                            Dirección
                            <br> Comuna
                            <br> Región
                            <br> Chile, Sur America
                        </address>
                    </div>
                </div>
                <div class="media padleft10">
                    <div class="media-left media-top">
                        <a href="#">
                            <div class="box-icon">
                                <i class="livicon" data-name="phone" data-size="22" data-loop="true" data-c="#fff"
                                   data-hc="#fff"></i>
                            </div>
                        </a>
                    </div>
                    <div class="media-body padbtm2">
                        <h4 class="media-heading">Teléfono:</h4> +56 (2) 2 555 555
                    </div>
                </div>
            </div>
            <!-- //Address Section End -->
        </div>
    </div>
    <!-- //Container Section End -->
@endsection

@section('script')
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/gmap.js') }}"></script>
@endsection