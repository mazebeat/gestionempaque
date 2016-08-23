@extends('admin.layouts.default')

{{-- Page title --}}
@section('title')
    Locales
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')
@stop


{{-- Page content --}}
@section('content')
    <section class="content-header">
        <h1>Locales</h1>
        <ol class="breadcrumb">
            <li>
                <a href="#">
                    <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                    Dashboard
                </a>
            </li>
            <li>Mantenedor</li>
            <li class="active">Locales</li>
        </ol>
    </section>
    <section class="content">
        <div class="col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h4 class="panel-title">Formulario</h4>
                    <span class="pull-right"> <i class="glyphicon glyphicon-chevron-up showhide clickable"
                                                 title="Show Panel content"></i>
                        <i class="glyphicon glyphicon-remove removepanel clickable"></i>
                    </span>
                </div>
                <div class="panel-body">

                    {{--<div class="row">--}}
                    {{--<div class="col-md-8 col-md-offset-2">--}}
                    {{--@if ($errors->any())--}}
                    {{--<div class="alert alert-danger">--}}
                    {{--<ul>--}}
                    {{--{{ implode('', $errors->all('<li class="error">:message</li>')) }}--}}
                    {{--</ul>--}}
                    {{--</div>--}}
                    {{--@endif--}}
                    {{--</div>--}}
                    {{--</div>--}}

                    @if(isset($action) && $action == 'edit')
                        {{ Form::model($local, array('class' => 'form-horizontal', 'method' => 'PATCH', 'route' => array('admin.locales.update', $local->id))) }}

                        {{--<div class="form-group">--}}
                        {{--                            {{ Form::label('id_local', 'Id_local:', array('class'=>'col-md-2 control-label')) }}--}}
                        {{--<div class="col-sm-10">--}}
                        {{ Form::input('hidden', 'id_local', Input::old('id_local'), array('class'=>'form-control')) }}
                        {{ Form::input('hidden', 'id_turno', Input::old('id_turno'), array('class'=>'form-control')) }}
                        {{--</div>--}}
                        {{--</div>--}}
                    @elseif(isset($action) && $action == 'create')
                        {{ Form::open(array('route' => 'admin.locales.store', 'class' => 'form-horizontal')) }}
                    @endif
                    <fieldset>
                        <div class="row">
                            <div class="col-md-6" style="">
                                <div class="form-group" style="position: static;">
                                    <label for="nom_local">Nombre Local</label>
                                    {{ Form::text('nom_local', Input::old('nom_local'), array('class'=>'form-control', 'placeholder'=>'Nombre local')) }}
                                </div>
                                <div class="form-group" style="position: static;">
                                    <label for="id_re">Region</label>
                                    {{ Form::select('id_re', Region::lists('str_descripcion', 'id_re'), Input::old('id_re'), array('class' => 'form-control')) }}
                                    {{--<select class="form-control" id="cb_region"></select>--}}
                                </div>
                                <div class="form-group">
                                    <label for="id_co">Comuna</label>
                                    {{ Form::select('id_co', Comuna::lists('str_descripcion', 'id_co'), Input::old('id_co'), array('class' => 'form-control')) }}
                                    {{--{{ Form::input('number', 'id_comuna', Input::old('id_comuna'), array('class'=>'form-control')) }}--}}
                                </div>
                                <div class="form-group" style="position: static;">
                                    <label for="telefono">Tel&eacute;fono</label>
                                    {{ Form::input('number', 'telefono', Input::old('telefono'), array('class'=>'form-control', 'placeholder'=>'Teléfono')) }}
                                </div>
                                <div class="form-group" style="position: static;">
                                    <label for="dia_semana_toma_turno">Dia Semana Toma Turno</label>
                                    {{ Form::select('dia_semana_toma_turno', ['Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo'], Input::old('dia_semana_toma_turno'), ['class' => 'form-control']) }}
                                </div>
                                <div class="form-group">
                                    <label for="hora_toma_turno_inicio">Hora Inicio Toma Turno</label>
                                    {{ Form::input('time', 'hora_toma_turno_inicio', Input::old('hora_toma_turno_inicio'), array('class'=>'form-control', 'placeholder'=>'Hora_toma_turno_inicio')) }}
                                </div>
                                <div class="form-group">
                                    <label for="hora_repechaje_inicio">Hora Inicio Repechaje</label>
                                    {{ Form::input('time', 'hora_repechaje_inicio', Input::old('hora_repechaje_inicio'), array('class'=>'form-control', 'placeholder'=>'Hora_repechaje_inicio')) }}
                                </div>
                                <div class="form-group" style="position: static;">
                                    <label for="cb_planilla">Modo Planilla</label>
                                    <select class="form-control" id="cb_planilla"></select>
                                </div>
                                <div class="checkbox" style="position: static;">
                                    <label>
                                        <input type="checkbox"> <span>Local Activo</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6" style="">
                                <div class="form-group" style="position: static;">
                                    <label for="gerente_local">Gerente Local</label>
                                    {{ Form::text('gerente_local', Input::old('gerente_local'), array('class'=>'form-control', 'placeholder'=>'Gerente_local')) }}
                                </div>
                                <div class="form-group" style="position: static;">
                                    <label for="id_pr">Provincia</label>
                                    {{ Form::select('id_pr', Provincia::lists('str_descripcion', 'id_pr'), Input::old('id_pr'), array('class' => 'form-control')) }}
                                    {{--{{ Form::input('number', 'id_provincia', Input::old('id_provincia'), array('class'=>'form-control')) }}--}}
                                </div>
                                <div class="form-group" style="position: static;">
                                    <label for="direccion">Direccion</label>
                                    {{ Form::text('direccion', Input::old('direccion'), array('class'=>'form-control', 'placeholder'=>'Direccion')) }}
                                </div>
                                <div class="form-group" style="position: static;">
                                    <label for="email">Email</label>
                                    {{ Form::input('email', 'email', Input::old('email'), array('class'=>'form-control', 'placeholder'=>'Email')) }}
                                </div>
                                <div class="form-group" style="position: static;">
                                    <label for="dia_semana_toma_turno">Dia Semana Repechaje</label>
                                    {{ Form::select('dia_semana_toma_turno', ['Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo'], Input::old('dia_semana_toma_turno'), ['class' => 'form-control']) }}
                                </div>
                                <div class="form-group" style="position: static;">
                                    <label for="hora_toma_turno_final">Hora Termino Toma Turno</label>
                                    {{ Form::input('time', 'hora_toma_turno_final', Input::old('hora_toma_turno_final'), array('class'=>'form-control', 'placeholder'=>'Hora_toma_turno_final')) }}
                                </div>
                                <div class="form-group">
                                    <label for="hora_repechaje_final">Hora Termino Repechaje</label>
                                    {{ Form::input('time', 'hora_repechaje_final', Input::old('hora_repechaje_final'), array('class'=>'form-control', 'placeholder'=>'Hora_repechaje_final')) }}
                                </div>
                            </div>
                        </div>
                        <!-- Button -->
                        </br>
                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="pull-right">
                                    @if(!isset($action) || $action == 'create')
                                        <button id="btnNew" name="btnNew" class="btn btn-primary" type="submit">
                                            Nuevo
                                        </button>
                                    @elseif(isset($action) && $action == 'edit')
                                        <button id="btnUpdate" name="btnUpdate" class="btn btn-info" type="submit">
                                            Actualizar
                                        </button>
                                    @endif
                                    {{ link_to_route('admin.locales.index', 'Limpiar', null, array('class' => 'btn btn-link')) }}
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-warning">
                <div class="panel-heading">
                    <h4 class="panel-title">Registrados</h4>
                    <span class="pull-right"> <i class="glyphicon glyphicon-chevron-up showhide clickable"
                                                 title="Show Panel content"></i>
                        <i class="glyphicon glyphicon-remove removepanel clickable"></i>
                    </span>
                </div>
                <div class="panel-body">
                    <div class="table-responsive table-scrollable text-center">
                        @if ($locals->count())
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    {{--<th>Id_local</th>--}}
                                    <th>Local</th>
                                    {{--<th>Gerente_local</th>--}}
                                    {{--<th>Id_region</th>--}}
                                    {{--<th>Id_provincia</th>--}}
                                    {{--<th>Id_comuna</th>--}}
                                    {{--<th>Direccion</th>--}}
                                    <th>Teléfono</th>
                                    <th>Email</th>
                                    {{--<th>Id_turno</th>--}}
                                    {{--<th>Dia_semana_toma_turno</th>--}}
                                    {{--<th>Hora_toma_turno_inicio</th>--}}
                                    {{--<th>Hora_toma_turno_final</th>--}}
                                    {{--<th>Hora_repechaje_inicio</th>--}}
                                    {{--<th>Hora_repechaje_final</th>--}}
                                    {{--<th>Planilla</th>--}}
                                    {{--<th>Local_activo</th>--}}
                                    {{--<th>Nombre_usuario</th>--}}
                                    {{--<th>Fecha_hora</th>--}}
                                    <th>&nbsp;</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach ($locals as $local)
                                    <tr>
                                        {{--<td>{{{ $local->id_local }}}</td>--}}
                                        <td><a href="{{ url('admin/locales/' . $local->id_local) }}"
                                               class="link">{{{ $local->nom_local }}}</a></td>
                                        {{--<td>{{{ $local->gerente_local }}}</td>--}}
                                        {{--<td>{{{ $local->id_region }}}</td>--}}
                                        {{--<td>{{{ $local->id_provincia }}}</td>--}}
                                        {{--<td>{{{ $local->id_comuna }}}</td>--}}
                                        {{--<td>{{{ $local->direccion }}}</td>--}}
                                        <td>{{{ $local->telefono }}}</td>
                                        <td>{{{ $local->email }}}</td>
                                        {{--<td>{{{ $local->id_turno }}}</td>--}}
                                        {{--<td>{{{ $local->dia_semana_toma_turno }}}</td>--}}
                                        {{--<td>{{{ $local->hora_toma_turno_inicio }}}</td>--}}
                                        {{--<td>{{{ $local->hora_toma_turno_final }}}</td>--}}
                                        {{--<td>{{{ $local->hora_repechaje_inicio }}}</td>--}}
                                        {{--<td>{{{ $local->hora_repechaje_final }}}</td>--}}
                                        {{--<td>{{{ $local->planilla }}}</td>--}}
                                        {{--<td>{{{ $local->local_activo }}}</td>--}}
                                        {{--<td>{{{ $local->nombre_usuario }}}</td>--}}
                                        {{--<td>{{{ $local->fecha_hora }}}</td>--}}
                                        <td>
                                            {{ Form::open(array('style' => 'display: inline-block;', 'method' => 'DELETE', 'route' => array('admin.locales.destroy', $local->id))) }}
                                            {{ Form::submit('Eliminar', array('class' => 'btn btn-xs btn-danger')) }}
                                            {{ Form::close() }}
                                            {{ link_to_route('admin.locales.edit', 'Editar', array($local->id), array('class' => 'btn btn-xs btn-info')) }}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        @else
                            No existen locales.
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

{{-- page level scripts --}}
@section('footer_scripts')
@stop
