@extends('layouts.scaffold')

@section('main')

    <div class="row">
        <div class="col-md-10 col-md-offset-2">
            <h1>Edit Norma</h1>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        {{ implode('', $errors->all('<li class="error">:message</li>')) }}
                    </ul>
                </div>
            @endif
        </div>
    </div>

    {{ Form::model($norma, array('class' => 'form-horizontal', 'method' => 'PATCH', 'route' => array('admin.normas.update', $norma->id))) }}

    <div class="form-group">
        {{ Form::label('id_norma', 'Id_norma:', array('class'=>'col-md-2 control-label')) }}
        <div class="col-sm-10">
            {{ Form::input('number', 'id_norma', Input::old('id_norma'), array('class'=>'form-control')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('nom_norma', 'Nom_norma:', array('class'=>'col-md-2 control-label')) }}
        <div class="col-sm-10">
            {{ Form::text('nom_norma', Input::old('nom_norma'), array('class'=>'form-control', 'placeholder'=>'Nom_norma')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('ruta_norma', 'Ruta_norma:', array('class'=>'col-md-2 control-label')) }}
        <div class="col-sm-10">
            {{ Form::text('ruta_norma', Input::old('ruta_norma'), array('class'=>'form-control', 'placeholder'=>'Ruta_norma')) }}
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
            {{ link_to_route('admin.normas.show', 'Cancel', $norma->id, array('class' => 'btn btn-lg btn-default')) }}
        </div>
    </div>

    {{ Form::close() }}

@stop