@extends('layouts.scaffold')

@section('main')

    <div class="row">
        <div class="col-md-10 col-md-offset-2">
            <h1>Create Local</h1>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        {{ implode('', $errors->all('<li class="error">:message</li>')) }}
                    </ul>
                </div>
            @endif
        </div>
    </div>

    {{ Form::open(array('route' => 'admin.locals.store', 'class' => 'form-horizontal')) }}

    <div class="form-group">
        {{ Form::label('id_local', 'Id_local:', array('class'=>'col-md-2 control-label')) }}
        <div class="col-sm-10">
            {{ Form::input('number', 'id_local', Input::old('id_local'), array('class'=>'form-control')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('nom_local', 'Nom_local:', array('class'=>'col-md-2 control-label')) }}
        <div class="col-sm-10">
            {{ Form::text('nom_local', Input::old('nom_local'), array('class'=>'form-control', 'placeholder'=>'Nom_local')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('gerente_local', 'Gerente_local:', array('class'=>'col-md-2 control-label')) }}
        <div class="col-sm-10">
            {{ Form::text('gerente_local', Input::old('gerente_local'), array('class'=>'form-control', 'placeholder'=>'Gerente_local')) }}
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
        {{ Form::label('id_turno', 'Id_turno:', array('class'=>'col-md-2 control-label')) }}
        <div class="col-sm-10">
            {{ Form::input('number', 'id_turno', Input::old('id_turno'), array('class'=>'form-control')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('dia_semana_toma_turno', 'Dia_semana_toma_turno:', array('class'=>'col-md-2 control-label')) }}
        <div class="col-sm-10">
            {{ Form::text('dia_semana_toma_turno', Input::old('dia_semana_toma_turno'), array('class'=>'form-control', 'placeholder'=>'Dia_semana_toma_turno')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('hora_toma_turno_inicio', 'Hora_toma_turno_inicio:', array('class'=>'col-md-2 control-label')) }}
        <div class="col-sm-10">
            {{ Form::text('hora_toma_turno_inicio', Input::old('hora_toma_turno_inicio'), array('class'=>'form-control', 'placeholder'=>'Hora_toma_turno_inicio')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('hora_toma_turno_final', 'Hora_toma_turno_final:', array('class'=>'col-md-2 control-label')) }}
        <div class="col-sm-10">
            {{ Form::text('hora_toma_turno_final', Input::old('hora_toma_turno_final'), array('class'=>'form-control', 'placeholder'=>'Hora_toma_turno_final')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('hora_repechaje_inicio', 'Hora_repechaje_inicio:', array('class'=>'col-md-2 control-label')) }}
        <div class="col-sm-10">
            {{ Form::text('hora_repechaje_inicio', Input::old('hora_repechaje_inicio'), array('class'=>'form-control', 'placeholder'=>'Hora_repechaje_inicio')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('hora_repechaje_final', 'Hora_repechaje_final:', array('class'=>'col-md-2 control-label')) }}
        <div class="col-sm-10">
            {{ Form::text('hora_repechaje_final', Input::old('hora_repechaje_final'), array('class'=>'form-control', 'placeholder'=>'Hora_repechaje_final')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('planilla', 'Planilla:', array('class'=>'col-md-2 control-label')) }}
        <div class="col-sm-10">
            {{ Form::text('planilla', Input::old('planilla'), array('class'=>'form-control', 'placeholder'=>'Planilla')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('local_activo', 'Local_activo:', array('class'=>'col-md-2 control-label')) }}
        <div class="col-sm-10">
            {{ Form::text('local_activo', Input::old('local_activo'), array('class'=>'form-control', 'placeholder'=>'Local_activo')) }}
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
            {{ Form::submit('Create', array('class' => 'btn btn-lg btn-primary')) }}
        </div>
    </div>

    {{ Form::close() }}

@stop


