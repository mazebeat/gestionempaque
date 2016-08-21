@extends('admin.layouts.default')

{{-- Page title --}}
@section('title')
    Provincias
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')
@stop

{{-- Page content --}}
@section('content')
    <section class="content-header">
        <h1>Provincias {{ link_to_route('admin.provincia.index', 'Volver', null, array('class'=>'btn btn-xs btn-link')) }}</h1>
        <ol class="breadcrumb">
            <li>
                <a href="#">
                    <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                    Dashboard
                </a>
            </li>
            <li>Mantenedor</li>
            <li class="active">Provincias</li>
        </ol>
    </section>
    <section class="content">
        <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h4 class="panel-title">Busqueda</h4>
                    <span class="pull-right"> <i class="glyphicon glyphicon-chevron-up showhide clickable" title="Show Panel content"></i>
                        <i class="glyphicon glyphicon-remove removepanel clickable"></i>
                    </span>
                </div>
                <div class="panel-body">

                    <div class="row">
                        <div class="col-md-10 col-md-offset-2">
                            {{--<h1>Edit Provincium</h1>--}}

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        {{ implode('', $errors->all('<li class="error">:message</li>')) }}
                                    </ul>
                                </div>
                            @endif
                        </div>
                    </div>

                    {{ Form::model($provincium, array('class' => 'form-horizontal', 'method' => 'PATCH', 'route' => array('admin.provincia.update', $provincium->id))) }}

                    {{--<div class="form-group">--}}
{{--                        {{ Form::label('id_pr', 'Id_pr:', array('class'=>'col-md-2 control-label')) }}--}}
                        {{--<div class="col-sm-10">--}}
                            {{ Form::input('hidden', 'id_pr', Input::old('id_pr')) }}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="form-group">--}}
{{--                        {{ Form::label('id_re', 'Id_re:', array('class'=>'col-md-2 control-label')) }}--}}
                        {{--<div class="col-sm-10">--}}
                            {{ Form::input('hidden', 'id_re', Input::old('id_re')) }}
                        {{--</div>--}}
                    {{--</div>--}}

                    <div class="form-group">
                        {{ Form::label('str_descripcion', 'Descripción:', array('class'=>'col-md-2 control-label')) }}
                        <div class="col-sm-10">
                            {{ Form::text('str_descripcion', Input::old('str_descripcion'), array('class'=>'form-control', 'placeholder'=>'Descripción')) }}
                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('num_comunas', 'Número Comunas:', array('class'=>'col-md-2 control-label')) }}
                        <div class="col-sm-10">
                            {{ Form::input('number', 'num_comunas', Input::old('num_comunas'), array('class'=>'form-control')) }}
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-sm-2 control-label">&nbsp;</label>

                        <div class="col-sm-10">
                            {{ Form::submit('Actualizar', array('class' => 'btn btn-primary')) }}
                            {{ link_to_route('admin.provincia.show', 'Cancelar', $provincium->id, array('class' => 'btn btn-default')) }}
                        </div>
                    </div>

                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </section>
@stop