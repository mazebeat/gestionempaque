@extends('layouts.scaffold')

@section('main')

    <h1>Show Norma</h1>

    <p>{{ link_to_route('admin.normas.index', 'Return to All normas', null, array('class'=>'btn btn-lg btn-primary')) }}</p>

    <table class="table table-striped">
        <thead>
        <tr>
            <th>Id_norma</th>
            <th>Nom_norma</th>
            <th>Ruta_norma</th>
            <th>Nombre_usuario</th>
            <th>Fecha_hora</th>
        </tr>
        </thead>

        <tbody>
        <tr>
            <td>{{{ $norma->id_norma }}}</td>
            <td>{{{ $norma->nom_norma }}}</td>
            <td>{{{ $norma->ruta_norma }}}</td>
            <td>{{{ $norma->nombre_usuario }}}</td>
            <td>{{{ $norma->fecha_hora }}}</td>
            <td>
                {{ Form::open(array('style' => 'display: inline-block;', 'method' => 'DELETE', 'route' => array('admin.normas.destroy', $norma->id))) }}
                {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                {{ Form::close() }}
                {{ link_to_route('admin.normas.edit', 'Edit', array($norma->id), array('class' => 'btn btn-info')) }}
            </td>
        </tr>
        </tbody>
    </table>

@stop
