@extends('layouts.scaffold')

@section('main')

    <div class="row">
        <div class="col-md-10 col-md-offset-2">
            <h1>Edit Permiso</h1>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        {{ implode('', $errors->all('<li class="error">:message</li>')) }}
                    </ul>
                </div>
            @endif
        </div>
    </div>

    {{ Form::model($permiso, array('class' => 'form-horizontal', 'method' => 'PATCH', 'route' => array('permisos.update', $permiso->id))) }}

    <div class="form-group">
        {{ Form::label('id_perfil', 'Id_perfil:', array('class'=>'col-md-2 control-label')) }}
        <div class="col-sm-10">
            {{ Form::input('number', 'id_perfil', Input::old('id_perfil'), array('class'=>'form-control')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('id_acceso', 'Id_acceso:', array('class'=>'col-md-2 control-label')) }}
        <div class="col-sm-10">
            {{ Form::input('number', 'id_acceso', Input::old('id_acceso'), array('class'=>'form-control')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('insertar', 'Insertar:', array('class'=>'col-md-2 control-label')) }}
        <div class="col-sm-10">
            {{ Form::checkbox('insertar') }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('modificar', 'Modificar:', array('class'=>'col-md-2 control-label')) }}
        <div class="col-sm-10">
            {{ Form::checkbox('modificar') }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('eliminar', 'Eliminar:', array('class'=>'col-md-2 control-label')) }}
        <div class="col-sm-10">
            {{ Form::checkbox('eliminar') }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('consultar', 'Consultar:', array('class'=>'col-md-2 control-label')) }}
        <div class="col-sm-10">
            {{ Form::checkbox('consultar') }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('nombre_usuario', 'Nombre_usuario:', array('class'=>'col-md-2 control-label')) }}
        <div class="col-sm-10">
            {{ Form::text('nombre_usuario', Input::old('nombre_usuario'), array('class'=>'form-control', 'placeholder'=>'Nombre_usuario')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('fecha_hora', 'Fecha_hora:', array('class'=>'col-md-2 control-label')) }}
        <div class="col-sm-10">
            {{ Form::text('fecha_hora', Input::old('fecha_hora'), array('class'=>'form-control', 'placeholder'=>'Fecha_hora')) }}
        </div>
    </div>


    <div class="form-group">
        <label class="col-sm-2 control-label">&nbsp;</label>

        <div class="col-sm-10">
            {{ Form::submit('Update', array('class' => 'btn btn-lg btn-primary')) }}
            {{ link_to_route('permisos.show', 'Cancel', $permiso->id, array('class' => 'btn btn-lg btn-default')) }}
        </div>
    </div>

    {{ Form::close() }}

@stop