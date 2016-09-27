@extends('admin.layouts.default')

{{-- Page title --}}
@section('title')
    Accesos
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')
@stop

{{-- Page content --}}
@section('content')
    <section class="content-header">
        <h1>Normas</h1>
        <ol class="breadcrumb">
            <li>
                <a href="#">
                    <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                    Dashboard
                </a>
            </li>
            <li>Mantenedor</li>
            <li class="active">Normas</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-10 col-md-offset-2">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            {{ implode('', $errors->all('<li class="error">:message</li>')) }}
                        </ul>
                    </div>
                @endif
            </div>
        </div>
        <div class="col-md-12">
            <div class="panel panel-warning">
                <div class="panel-heading">
                    <h4 class="panel-title">Crear Norma</h4>
                    <span class="pull-right"> <i class="glyphicon glyphicon-chevron-up showhide clickable"
                                                 title="Show Panel content"></i>
                        <i class="glyphicon glyphicon-remove removepanel clickable"></i>
                    </span>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-2">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        {{ implode('', $errors->all('<li class="error">:message</li>')) }}
                                    </ul>
                                </div>
                            @endif
                        </div>
                    </div>

                    {{ Form::open(array('route' => 'admin.normas.store', 'class' => 'form-horizontal', 'files' => true)) }}

                    {{--<div class="form-group">--}}
                    {{--{{ Form::label('id_norma', 'Id_norma:', array('class'=>'col-md-2 control-label')) }}--}}
                    {{--<div class="col-sm-10">--}}
                    {{--{{ Form::input('number', 'id_norma', Input::old('id_norma'), array('class'=>'form-control')) }}--}}
                    {{--</div>--}}
                    {{--</div>--}}

                    <div class="form-group">
                        {{ Form::label('id_local', 'Local:', array('class'=>'col-md-2 control-label')) }}
                        <div class="col-sm-10">
                            {{ Form::select('id_local', Local::lists('nom_local', 'id_local'), Input::old('id_local'), array('class'=>'form-control')) }}
                        </div>
                    </div>


                    <div class="form-group">
                        {{ Form::label('nom_norma', 'Nombre:', array('class'=>'col-md-2 control-label')) }}
                        <div class="col-sm-10">
                            {{ Form::text('nom_norma', Input::old('nom_norma'), array('class'=>'form-control', 'placeholder'=>'Nombrre norma')) }}
                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('ruta_norma', 'Archivo:', array('class'=>'col-md-2 control-label')) }}
                        <div class="col-sm-10">
                            {{ Form::file('ruta_norma', array('class'=>'form-control', 'placeholder'=>'Ruta_norma')) }}
                        </div>
                    </div>

                    {{--<div class="form-group">--}}
                    {{--{{ Form::label('nombre_usuario', 'Nombre_usuario:', array('class'=>'col-md-2 control-label')) }}--}}
                    {{--<div class="col-sm-10">--}}
                    {{--{{ Form::text('nombre_usuario', Input::old('nombre_usuario'), array('class'=>'form-control', 'placeholder'=>'Nombre_usuario')) }}--}}
                    {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="form-group">--}}
                    {{--{{ Form::label('fecha_hora', 'Fecha_hora:', array('class'=>'col-md-2 control-label')) }}--}}
                    {{--<div class="col-sm-10">--}}
                    {{--{{ Form::text('fecha_hora', Input::old('fecha_hora'), array('class'=>'form-control', 'placeholder'=>'Fecha_hora')) }}--}}
                    {{--</div>--}}
                    {{--</div>--}}

                    <div class="form-group">
                        <label class="col-sm-2 control-label">&nbsp;</label>

                        <div class="col-sm-10">
                            {{ Form::submit('Crear', array('class' => 'btn btn-primary')) }}
                        </div>
                    </div>

                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </section>
@stop


