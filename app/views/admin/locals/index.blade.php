@extends('layouts.scaffold')

@section('main')

    <h1>All Locals</h1>

    <p>{{ link_to_route('admin.locals.create', 'Add New Local', null, array('class' => 'btn btn-lg btn-success')) }}</p>

    @if ($locals->count())
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Id_local</th>
                <th>Nom_local</th>
                <th>Gerente_local</th>
                <th>Id_region</th>
                <th>Id_provincia</th>
                <th>Id_comuna</th>
                <th>Direccion</th>
                <th>Telefono</th>
                <th>Email</th>
                <th>Id_turno</th>
                <th>Dia_semana_toma_turno</th>
                <th>Hora_toma_turno_inicio</th>
                <th>Hora_toma_turno_final</th>
                <th>Hora_repechaje_inicio</th>
                <th>Hora_repechaje_final</th>
                <th>Planilla</th>
                <th>Local_activo</th>
                <th>Nombre_usuario</th>
                <th>Fecha_hora</th>
                <th>&nbsp;</th>
            </tr>
            </thead>

            <tbody>
            @foreach ($locals as $local)
                <tr>
                    <td>{{{ $local->id_local }}}</td>
                    <td>{{{ $local->nom_local }}}</td>
                    <td>{{{ $local->gerente_local }}}</td>
                    <td>{{{ $local->id_region }}}</td>
                    <td>{{{ $local->id_provincia }}}</td>
                    <td>{{{ $local->id_comuna }}}</td>
                    <td>{{{ $local->direccion }}}</td>
                    <td>{{{ $local->telefono }}}</td>
                    <td>{{{ $local->email }}}</td>
                    <td>{{{ $local->id_turno }}}</td>
                    <td>{{{ $local->dia_semana_toma_turno }}}</td>
                    <td>{{{ $local->hora_toma_turno_inicio }}}</td>
                    <td>{{{ $local->hora_toma_turno_final }}}</td>
                    <td>{{{ $local->hora_repechaje_inicio }}}</td>
                    <td>{{{ $local->hora_repechaje_final }}}</td>
                    <td>{{{ $local->planilla }}}</td>
                    <td>{{{ $local->local_activo }}}</td>
                    <td>{{{ $local->nombre_usuario }}}</td>
                    <td>{{{ $local->fecha_hora }}}</td>
                    <td>
                        {{ Form::open(array('style' => 'display: inline-block;', 'method' => 'DELETE', 'route' => array('admin.locals.destroy', $local->id))) }}
                        {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                        {{ link_to_route('admin.locals.edit', 'Edit', array($local->id), array('class' => 'btn btn-info')) }}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        There are no locals
    @endif

@stop
