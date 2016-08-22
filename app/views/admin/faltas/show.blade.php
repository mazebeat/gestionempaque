@extends('layouts.scaffold')

@section('main')

    <h1>Show Falta</h1>

    <p>{{ link_to_route('faltas.index', 'Return to All faltas', null, array('class'=>'btn btn-lg btn-primary')) }}</p>

    <table class="table table-striped">
        <thead>
        <tr>
            <th>Id_falta</th>
            <th>Id_usuario</th>
            <th>Falta_leve</th>
            <th>Falta_media</th>
            <th>Falta_grave</th>
            <th>Nombre_usuario</th>
        </tr>
        </thead>

        <tbody>
        <tr>
            <td>{{{ $falta->id_falta }}}</td>
            <td>{{{ $falta->id_usuario }}}</td>
            <td>{{{ $falta->falta_leve }}}</td>
            <td>{{{ $falta->falta_media }}}</td>
            <td>{{{ $falta->falta_grave }}}</td>
            <td>{{{ $falta->nombre_usuario }}}</td>
            <td>
                {{ Form::open(array('style' => 'display: inline-block;', 'method' => 'DELETE', 'route' => array('faltas.destroy', $falta->id))) }}
                {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                {{ Form::close() }}
                {{ link_to_route('faltas.edit', 'Edit', array($falta->id), array('class' => 'btn btn-info')) }}
            </td>
        </tr>
        </tbody>
    </table>

@stop
