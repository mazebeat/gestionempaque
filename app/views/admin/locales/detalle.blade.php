@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
    Locales
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/takeTurn.min.css') }}"/>
@stop


{{-- Page content --}}
@section('content')
    <section class="content-header">
        <h1>Locales <a href="{{ URL::to('admin/locales') }}" class="btn btn-linl">Volver</a></h1>
        <ol class="breadcrumb">
            <li>
                <a href="#">
                    <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                    Dashboard
                </a>
            </li>
            <li>Mantenedor</li>
            <li>Locales</li>
            <li class="active">Local {{ $id }}</li>
        </ol>
    </section>
    <section class="content">
        <div class="col-md-12">
            <div class="panel panel-warning">
                <div class="panel-heading">
                    <h4 class="panel-title">Local {{ $id }}</h4>
                    <span class="pull-right"> <i class="glyphicon glyphicon-chevron-up showhide clickable" title="Show Panel content"></i>
                        <i class="glyphicon glyphicon-remove removepanel clickable"></i>
                    </span>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-xs-3">
                            <ul class="nav nav-pills nav-stacked" style="max-width: 300px;">
                                <li class="active"><a data-toggle="pill" href="#planilla">Planillas</a></li>
                                <li><a data-toggle="pill" href="#tomaturnos">Toma Turnos</a></li>
                                <li><a data-toggle="pill" href="#repechaje">Repechaje</a></li>
                                <li><a data-toggle="pill" href="#addempaque">Añadir Empaque</a></li>
                                <li><a data-toggle="pill" href="#regalarturno">Regalar Turno</a></li>
                                <li><a data-toggle="pill" href="#norma">Normas</a></li>
                                {{--<li class="disabled">--}}
                                {{--<a href="#">Disabled</a>--}}
                                {{--</li>--}}
                            </ul>
                        </div>
                        <div class="col-xs-9">
                            <div class="tab-content">
                                <div id="planilla" class="tab-pane fade in active">
                                    <h3>planilla</h3>

                                    @include('admin.locales.calendar', array('text' => 'Ver'))
                                </div>
                                <div id="tomaturnos" class="tab-pane fade">
                                    <h3>tomaturnos</h3>

                                    @include('admin.locales.calendar', array('text' => 'Tomar'))
                                </div>
                                <div id="repechaje" class="tab-pane fade">
                                    <h3>repachaje</h3>

                                    @include('admin.locales.calendar', array('text' => 'Tomar'))
                                </div>
                                <div id="addempaque" class="tab-pane fade">
                                    <h3>addempaque</h3>

                                    <p>content</p>
                                </div>
                                <div id="regalarturno" class="tab-pane fade">
                                    <h3>regalarturno</h3>

                                    <p>content</p>
                                </div>
                                <div id="norma" class="tab-pane fade">
                                    @include('admin.normas.index')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

{{-- page level scripts --}}
@section('footer_scripts')
@stop
