@extends('layouts.scaffold')

@section('main')

    <h1>All Repechajes</h1>

    <p>{{ link_to_route('admin.repechajes.create', 'Add New Repechaje', null, array('class' => 'btn btn-lg btn-success')) }}</p>

    @if ($repechajes->count())
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Id_repechaje</th>
                <th>Fecha</th>
                <th>Id_local</th>
                <th>Id_usuario</th>
                <th>Dia_semana</th>
                <th>&nbsp;</th>
            </tr>
            </thead>

            <tbody>
            @foreach ($repechajes as $repechaje)
                <tr>
                    <td>{{{ $repechaje->id_repechaje }}}</td>
                    <td>{{{ $repechaje->fecha }}}</td>
                    <td>{{{ $repechaje->id_local }}}</td>
                    <td>{{{ $repechaje->id_usuario }}}</td>
                    <td>{{{ $repechaje->dia_semana }}}</td>
                    <td>
                        {{ Form::open(array('style' => 'display: inline-block;', 'method' => 'DELETE', 'route' => array('admin.repechajes.destroy', $repechaje->id))) }}
                        {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                        {{ link_to_route('admin.repechajes.edit', 'Edit', array($repechaje->id), array('class' => 'btn btn-info')) }}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        There are no repechajes
    @endif

@stop
