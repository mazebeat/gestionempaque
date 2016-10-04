@extends('admin.layouts.default')

{{-- Page title --}}
@section('title')
    Comunas
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')
@stop

{{-- Page content --}}
@section('content')
    <section class="content-header">
        <h1>Empaques</h1>
        <ol class="breadcrumb">
            <li>
                <a href="#">
                    <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                    Dashboard
                </a>
            </li>
            <li>Mantenedor</li>
            <li class="active">Empaque</li>
        </ol>
    </section>
    <section class="content">
        <div class="col-md-12">
            <div class="panel panel-warning">
                <div class="panel-heading">
                    <h4 class="panel-title">Editar Empaque</h4>
                    <span class="pull-right"> <i class="glyphicon glyphicon-chevron-up showhide clickable"
                                                 title="Show Panel content"></i>
                        <i class="glyphicon glyphicon-remove removepanel clickable"></i>
                    </span>
                </div>
                <div class="panel-body">


                    <div class="row">
                        <div class="col-md-10 col-md-offset-2">
                            {{--<h1>Edit Empaque</h1>--}}

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        {{ implode('', $errors->all('<li class="error">:message</li>')) }}
                                    </ul>
                                </div>
                            @endif
                        </div>
                    </div>
                    {{ Form::model($empaque, array('class' => 'form-horizontal', 'method' => 'PATCH', 'route' => array('admin.empaques.update', $empaque->id))) }}

                    <div class="form-group">
                        {{ Form::label('id_usuario', 'RUN:', array('class'=>'col-md-2 control-label')) }}
                        <div class="col-sm-10">
                            {{ Form::text('id_usuario', Input::old('id_usuario'), array('class'=>'form-control', 'placeholder'=>'Id_usuario', 'readonly')) }}
                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('nombre', 'Nombre:', array('class'=>'col-md-2 control-label')) }}
                        <div class="col-sm-10">
                            {{ Form::text('nombre', Input::old('nombre'), array('class'=>'form-control', 'placeholder'=>'Nombre')) }}
                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('ape_paterno', 'Apellido paterno:', array('class'=>'col-md-2 control-label')) }}
                        <div class="col-sm-10">
                            {{ Form::text('ape_paterno', Input::old('ape_paterno'), array('class'=>'form-control', 'placeholder'=>'Ape_paterno')) }}
                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('ape_materno', 'Apellido materno:', array('class'=>'col-md-2 control-label')) }}
                        <div class="col-sm-10">
                            {{ Form::text('ape_materno', Input::old('ape_materno'), array('class'=>'form-control', 'placeholder'=>'Ape_materno')) }}
                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('id_region', 'Región:', array('class'=>'col-md-2 control-label')) }}
                        <div class="col-sm-10">
                            {{ Form::select('id_region', Region::lists('str_descripcion', 'id_re'), Input::old('id_region'), array('class'=>'form-control')) }}
                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('id_provincia', 'Provincia:', array('class'=>'col-md-2 control-label')) }}
                        <div class="col-sm-10">
                            {{ Form::select('id_provincia', Provincia::lists('str_descripcion', 'id_pr'), Input::old('id_provincia'), array('class'=>'form-control')) }}
                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('id_comuna', 'Comuna:', array('class'=>'col-md-2 control-label')) }}
                        <div class="col-sm-10">
                            {{ Form::select('id_comuna', Comuna::lists('str_descripcion', 'id_co'), Input::old('id_comuna'), array('class'=>'form-control')) }}
                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('direccion', 'Dirección:', array('class'=>'col-md-2 control-label')) }}
                        <div class="col-sm-10">
                            {{ Form::text('direccion', Input::old('direccion'), array('class'=>'form-control', 'placeholder'=>'Direccion')) }}
                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('telefono', 'Teléfono:', array('class'=>'col-md-2 control-label')) }}
                        <div class="col-sm-10">
                            {{ Form::text('telefono', Input::old('telefono'), array('class'=>'form-control', 'placeholder'=>'Telefono')) }}
                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('email', 'Email:', array('class'=>'col-md-2 control-label')) }}
                        <div class="col-sm-10">
                            {{ Form::text('email', Input::old('email'), array('class'=>'form-control', 'placeholder'=>'Email')) }}
                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('sexo', 'Sexo:', array('class'=>'col-md-2 control-label')) }}
                        <div class="col-sm-10">
                            {{ Form::text('sexo', Input::old('sexo'), array('class'=>'form-control', 'placeholder'=>'Sexo')) }}
                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('fecha_nacimiento', 'Fecha Nacimiento:', array('class'=>'col-md-2 control-label')) }}
                        <div class="col-sm-10">
                            {{ Form::input('date', 'fecha_nacimiento', Input::old('fecha_nacimiento'), array('class'=>'form-control', 'placeholder'=>'Fecha_nacimiento')) }}
                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('id_casa_estudio', 'Casa estudio:', array('class'=>'col-md-2 control-label')) }}
                        <div class="col-sm-10">
                            {{ Form::select('id_casa_estudio', Perfil::lists('str_descripcion', 'id_casa_estudio'), Input::old('id_casa_estudio'), array('class'=>'form-control')) }}
                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('id_perfil', 'Perfil:', array('class'=>'col-md-2 control-label')) }}
                        <div class="col-sm-10">
                            {{ Form::select('id_perfil', Perfil::lists('nom_perfil', 'id_perfil'), Input::old('id_perfil'), array('class'=>'form-control')) }}
                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('id_local', 'Local:', array('class'=>'col-md-2 control-label')) }}
                        <div class="col-sm-10">
                            {{ Form::select('id_local', Local::lists('nom_local', 'id_local'), Input::old('id_local'), array('class'=>'form-control')) }}
                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('bloqueado', 'Bloqueado:', array('class'=>'col-md-2 control-label')) }}
                        <div class="col-sm-10">
                            {{ Form::checkbox('bloqueado') }}
                        </div>
                    </div>

                    {{--<div class="form-group">--}}
                    {{--{{ Form::label('nombre_usuario', 'Username:', array('class'=>'col-md-2 control-label')) }}--}}
                    {{--<div class="col-sm-10">--}}
                    {{--{{ Form::text('nombre_usuario', Input::old('nombre_usuario'), array('class'=>'form-control', 'placeholder'=>'Nombre_usuario')) }}--}}
                    {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="form-group">--}}
                    {{--{{ Form::label('fecha_hora', 'Fecha_hora:', array('class'=>'col-md-2 control-label')) }}--}}
                    {{--<div class="col-sm-10">--}}
                    {{--{{ Form::input('date', 'fecha_hora', Carbon::parse(Input::old('fecha_hora'))->toDateString(), array('class'=>'form-control', 'placeholder'=>'Fecha_hora')) }}--}}
                    {{--</div>--}}
                    {{--</div>--}}


                    <div class="form-group">
                        <label class="col-sm-2 control-label">&nbsp;</label>
                        <div class="col-sm-10">
                            {{ Form::submit('Actualizar', array('class' => 'btn btn-primary')) }}
                            {{ link_to_route('admin.empaques.show', 'Cancelar', $empaque->id, array('class' => 'btn btn-default')) }}
                        </div>
                    </div>


                    {{ Form::close() }}
                </div>
            </div>
    </section>
@stop