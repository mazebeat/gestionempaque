@extends('layouts.scaffold')

@section('main')

    <h1>Show Permiso</h1>

    <p>{{ link_to_route('admin.permisos.index', 'Return to All permisos', null, array('class'=>'btn btn-lg btn-primary')) }}</p>

    <table class="table table-striped">
        <thead>
        <tr>
            <th>Id_perfil</th>
            <th>Id_acceso</th>
            <th>Insertar</th>
            <th>Modificar</th>
            <th>Eliminar</th>
            <th>Consultar</th>
            <th>Nombre_usuario</th>
            <th>Fecha_hora</th>
        </tr>
        </thead>

        <tbody>
        <tr>
            <td>{{{ $permiso->id_perfil }}}</td>
            <td>{{{ $permiso->id_acceso }}}</td>
            <td>{{{ $permiso->insertar }}}</td>
            <td>{{{ $permiso->modificar }}}</td>
            <td>{{{ $permiso->eliminar }}}</td>
            <td>{{{ $permiso->consultar }}}</td>
            <td>{{{ $permiso->nombre_usuario }}}</td>
            <td>{{{ $permiso->fecha_hora }}}</td>
            <td>
                {{ Form::open(array('style' => 'display: inline-block;', 'method' => 'DELETE', 'route' => array('admin.permisos.destroy', $permiso->id))) }}
                {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                {{ Form::close() }}
                {{ link_to_route('admin.permisos.edit', 'Edit', array($permiso->id), array('class' => 'btn btn-info')) }}
            </td>
        </tr>
        </tbody>
    </table>

@stop
