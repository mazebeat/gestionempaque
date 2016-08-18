@extends('layouts.scaffold')

@section('main')

    <div class="row">
        <div class="col-md-10 col-md-offset-2">
            <h1>Create Region</h1>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        {{ implode('', $errors->all('<li class="error">:message</li>')) }}
                    </ul>
                </div>
            @endif
        </div>
    </div>

    {{ Form::open(array('route' => 'admin.regions.store', 'class' => 'form-horizontal')) }}

    <div class="form-group">
        {{ Form::label('id_re', 'Id_re:', array('class'=>'col-md-2 control-label')) }}
        <div class="col-sm-10">
            {{ Form::input('number', 'id_re', Input::old('id_re'), array('class'=>'form-control')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('str_descripcion', 'Str_descripcion:', array('class'=>'col-md-2 control-label')) }}
        <div class="col-sm-10">
            {{ Form::text('str_descripcion', Input::old('str_descripcion'), array('class'=>'form-control', 'placeholder'=>'Str_descripcion')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('str_romano', 'Str_romano:', array('class'=>'col-md-2 control-label')) }}
        <div class="col-sm-10">
            {{ Form::text('str_romano', Input::old('str_romano'), array('class'=>'form-control', 'placeholder'=>'Str_romano')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('num_provincias', 'Num_provincias:', array('class'=>'col-md-2 control-label')) }}
        <div class="col-sm-10">
            {{ Form::input('number', 'num_provincias', Input::old('num_provincias'), array('class'=>'form-control')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('num_comunas', 'Num_comunas:', array('class'=>'col-md-2 control-label')) }}
        <div class="col-sm-10">
            {{ Form::input('number', 'num_comunas', Input::old('num_comunas'), array('class'=>'form-control')) }}
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


