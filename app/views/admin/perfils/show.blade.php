@extends('layouts.scaffold')

@section('main')

    <h1>Show Pefil</h1>

    <p>{{ link_to_route('admin.perfils.index', 'Return to All pefils', null, array('class'=>'btn btn-lg btn-primary')) }}</p>

    <table class="table table-striped">
        <thead>
        <tr>
            <th>Id_perfil</th>
            <th>Nom_perfil</th>
            <th>Nombre_perfil</th>
            <th>Fecha_hora</th>
        </tr>
        </thead>

        <tbody>
        <tr>
            <td>{{{ $pefil->id_perfil }}}</td>
            <td>{{{ $pefil->nom_perfil }}}</td>
            <td>{{{ $pefil->nombre_perfil }}}</td>
            <td>{{{ $pefil->fecha_hora }}}</td>
            <td>
                {{ Form::open(array('style' => 'display: inline-block;', 'method' => 'DELETE', 'route' => array('admin.perfils.destroy', $pefil->id))) }}
                {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                {{ Form::close() }}
                {{ link_to_route('admin.perfils.edit', 'Edit', array($pefil->id), array('class' => 'btn btn-info')) }}
            </td>
        </tr>
        </tbody>
    </table>

@stop
