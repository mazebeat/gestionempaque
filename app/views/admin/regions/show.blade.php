@extends('layouts.scaffold')

@section('main')

    <h1>Show Region</h1>

    <p>{{ link_to_route('admin.regions.index', 'Return to All regions', null, array('class'=>'btn btn-lg btn-primary')) }}</p>

    <table class="table table-striped">
        <thead>
        <tr>
            <th>Id_re</th>
            <th>Str_descripcion</th>
            <th>Str_romano</th>
            <th>Num_provincias</th>
            <th>Num_comunas</th>
        </tr>
        </thead>

        <tbody>
        <tr>
            <td>{{{ $region->id_re }}}</td>
            <td>{{{ $region->str_descripcion }}}</td>
            <td>{{{ $region->str_romano }}}</td>
            <td>{{{ $region->num_provincias }}}</td>
            <td>{{{ $region->num_comunas }}}</td>
            <td>
                {{ Form::open(array('style' => 'display: inline-block;', 'method' => 'DELETE', 'route' => array('admin.regions.destroy', $region->id))) }}
                {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                {{ Form::close() }}
                {{ link_to_route('admin.regions.edit', 'Edit', array($region->id), array('class' => 'btn btn-info')) }}
            </td>
        </tr>
        </tbody>
    </table>

@stop
