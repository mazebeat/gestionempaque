@extends('layouts.scaffold')

@section('main')

    <div class="row">
        <div class="col-md-10 col-md-offset-2">
            <h1>Create Repechaje</h1>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        {{ implode('', $errors->all('<li class="error">:message</li>')) }}
                    </ul>
                </div>
            @endif
        </div>
    </div>

    {{ Form::open(array('route' => 'admin.repechajes.store', 'class' => 'form-horizontal')) }}

    <div class="form-group">
        {{ Form::label('id_repechaje', 'Id_repechaje:', array('class'=>'col-md-2 control-label')) }}
        <div class="col-sm-10">
            {{ Form::input('number', 'id_repechaje', Input::old('id_repechaje'), array('class'=>'form-control')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('fecha', 'Fecha:', array('class'=>'col-md-2 control-label')) }}
        <div class="col-sm-10">
            {{ Form::text('fecha', Input::old('fecha'), array('class'=>'form-control', 'placeholder'=>'Fecha')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('id_local', 'Id_local:', array('class'=>'col-md-2 control-label')) }}
        <div class="col-sm-10">
            {{ Form::input('number', 'id_local', Input::old('id_local'), array('class'=>'form-control')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('id_usuario', 'Id_usuario:', array('class'=>'col-md-2 control-label')) }}
        <div class="col-sm-10">
            {{ Form::text('id_usuario', Input::old('id_usuario'), array('class'=>'form-control', 'placeholder'=>'Id_usuario')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('dia_semana', 'Dia_semana:', array('class'=>'col-md-2 control-label')) }}
        <div class="col-sm-10">
            {{ Form::text('dia_semana', Input::old('dia_semana'), array('class'=>'form-control', 'placeholder'=>'Dia_semana')) }}
        </div>
    </div>


    <div class="form-group">
        <label class="col-sm-2 control-label">&nbsp;</label>

        <div class="col-sm-10">
            {{ Form::submit('Create', array('class' => 'btn btn-lg btn-primary')) }}
        </div>
    </div>

    {{ Form::close() }}

@stop


