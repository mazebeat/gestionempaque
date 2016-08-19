@extends('layouts.scaffold')

@section('main')

<div class="row">
    <div class="col-md-10 col-md-offset-2">
        <h1>Edit Empaque</h1>

        @if ($errors->any())
        	<div class="alert alert-danger">
        	    <ul>
                    {{ implode('', $errors->all('<li class="error">:message</li>')) }}
                </ul>
        	</div>
        @endif
    </div>
</div>

{{ Form::model($empaque, array('class' => 'form-horizontal', 'method' => 'PATCH', 'route' => array('empaques.update', $empaque->id))) }}

        <div class="form-group">
            {{ Form::label('id_usuario', 'Id_usuario:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::text('id_usuario', Input::old('id_usuario'), array('class'=>'form-control', 'placeholder'=>'Id_usuario')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('nombre', 'Nombre:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::text('nombre', Input::old('nombre'), array('class'=>'form-control', 'placeholder'=>'Nombre')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('ape_paterno', 'Ape_paterno:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::text('ape_paterno', Input::old('ape_paterno'), array('class'=>'form-control', 'placeholder'=>'Ape_paterno')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('ape_materno', 'Ape_materno:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::text('ape_materno', Input::old('ape_materno'), array('class'=>'form-control', 'placeholder'=>'Ape_materno')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('id_region', 'Id_region:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::input('number', 'id_region', Input::old('id_region'), array('class'=>'form-control')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('id_provincia', 'Id_provincia:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::input('number', 'id_provincia', Input::old('id_provincia'), array('class'=>'form-control')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('id_comuna', 'Id_comuna:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::input('number', 'id_comuna', Input::old('id_comuna'), array('class'=>'form-control')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('direccion', 'Direccion:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::text('direccion', Input::old('direccion'), array('class'=>'form-control', 'placeholder'=>'Direccion')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('telefono', 'Telefono:', array('class'=>'col-md-2 control-label')) }}
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
            {{ Form::label('fecha_nacimiento', 'Fecha_nacimiento:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::text('fecha_nacimiento', Input::old('fecha_nacimiento'), array('class'=>'form-control', 'placeholder'=>'Fecha_nacimiento')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('id_casa_estudio', 'Id_casa_estudio:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::input('number', 'id_casa_estudio', Input::old('id_casa_estudio'), array('class'=>'form-control')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('id_perfil', 'Id_perfil:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::input('number', 'id_perfil', Input::old('id_perfil'), array('class'=>'form-control')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('id_local', 'Id_local:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::input('number', 'id_local', Input::old('id_local'), array('class'=>'form-control')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('bloqueado', 'Bloqueado:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::checkbox('bloqueado') }}
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
      {{ link_to_route('empaques.show', 'Cancel', $empaque->id, array('class' => 'btn btn-lg btn-default')) }}
    </div>
</div>

{{ Form::close() }}

@stop