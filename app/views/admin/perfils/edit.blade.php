@extends('layouts.scaffold')

@section('main')

    <div class="row">
        <div class="col-md-10 col-md-offset-2">
            <h1>Edit Pefil</h1>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        {{ implode('', $errors->all('<li class="error">:message</li>')) }}
                    </ul>
                </div>
            @endif
        </div>
    </div>

    {{ Form::model($perfil, array('class' => 'form-horizontal', 'method' => 'PATCH', 'route' => array('admin.perfils.update', $perfil->id))) }}

    <div class="form-group">
        {{ Form::label('id_perfil', 'Id_perfil:', array('class'=>'col-md-2 control-label')) }}
        <div class="col-sm-10">
            {{ Form::input('number', 'id_perfil', Input::old('id_perfil'), array('class'=>'form-control')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('nom_perfil', 'Nom_perfil:', array('class'=>'col-md-2 control-label')) }}
        <div class="col-sm-10">
            {{ Form::text('nom_perfil', Input::old('nom_perfil'), array('class'=>'form-control', 'placeholder'=>'Nom_perfil')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('nombre_perfil', 'Nombre_perfil:', array('class'=>'col-md-2 control-label')) }}
        <div class="col-sm-10">
            {{ Form::text('nombre_perfil', Input::old('nombre_perfil'), array('class'=>'form-control', 'placeholder'=>'Nombre_perfil')) }}
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
            {{ link_to_route('admin.perfils.show', 'Cancel', $perfil->id, array('class' => 'btn btn-lg btn-default')) }}
        </div>
    </div>

    {{ Form::close() }}

@stop