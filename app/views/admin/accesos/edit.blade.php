@extends('admin.layouts.default')

{{-- Page title --}}
@section('title')
    Editar Accesos
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')
@stop

{{-- Page content --}}
@section('content')
    <section class="content-header">
        <h1>Editar Accesos</h1>
        <ol class="breadcrumb">
            <li>
                <a href="#">
                    <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                    Dashboard
                </a>
            </li>
            <li>Mantenedor</li>
            <li class="active">Accesos</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-10 col-md-offset-2">
                {{--<h1>Edita Acceso</h1>--}}

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
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h4 class="panel-title">...</h4>
                    <span class="pull-right"> <i class="glyphicon glyphicon-chevron-up showhide clickable" title="Show Panel content"></i>
                        <i class="glyphicon glyphicon-remove removepanel clickable"></i>
                    </span>
                </div>
                <div class="panel-body">
                    {{ Form::model($acceso, array('class' => 'form-horizontal', 'method' => 'PATCH', 'route' => array('admin.accesos.update', $acceso->id))) }}

                    {{--<div class="form-group">--}}
{{--                        {{ Form::label('id_acceso', 'Id_acceso:', array('class'=>'col-md-2 control-label')) }}--}}
                        {{--<div class="col-sm-10">--}}
                            {{--{{ Form::input('number', 'id_acceso', Input::old('id_acceso'), array('class'=>'form-control')) }}--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    <div class="form-group">
                        {{ Form::label('nom_acceso', 'Nombre acceso:', array('class'=>'col-md-2 control-label')) }}
                        <div class="col-sm-10">
                            {{ Form::text('nom_acceso', Input::old('nom_acceso'), array('class'=>'form-control', 'placeholder'=>'Nom_acceso')) }}
                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('nombre_usuario', 'Usuario:', array('class'=>'col-md-2 control-label')) }}
                        <div class="col-sm-10">
                            {{ Form::text('nombre_usuario', Input::old('nombre_usuario'), array('class'=>'form-control', 'placeholder'=>'Nombre_usuario')) }}
                        </div>
                    </div>

                    {{--<div class="form-group">--}}
{{--                        {{ Form::label('fecha_hora', 'Fecha_hora:', array('class'=>'col-md-2 control-label')) }}--}}
                        {{--<div class="col-sm-10">--}}
{{--                            {{ Form::text('fecha_hora', Input::old('fecha_hora'), array('class'=>'form-control', 'placeholder'=>'Fecha_hora')) }}--}}
                        {{--</div>--}}
                    {{--</div>--}}


                    <div class="form-group">
                        <label class="col-sm-2 control-label">&nbsp;</label>

                        <div class="col-sm-10">
                            {{ Form::submit('Actualizar', array('class' => 'btn btn-primary')) }}
                            {{ link_to_route('admin.accesos.show', 'Cancelar', $acceso->id, array('class' => 'btn btn-default')) }}
                        </div>
                    </div>

                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </section>
@stop