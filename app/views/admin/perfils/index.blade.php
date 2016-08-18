@extends('admin.layouts.default')

@section('content')
    <section class="content-header">
        <h1>Perfiles Mayores</h1>
        <ol class="breadcrumb">
            <li>
                <a href="#">
                    <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                    Dashboard
                </a>
            </li>
            <li>Mantenedor</li>
            <li class="active">Perfiles Mayores</li>
        </ol>
    </section>
    <section class="content">
        <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h4 class="panel-title">Busqueda</h4>
                    <span class="pull-right"> <i class="glyphicon glyphicon-chevron-up showhide clickable" title="Show Panel content"></i>
                        <i class="glyphicon glyphicon-remove removepanel clickable"></i>
                    </span>
                </div>
                <div class="panel-body">
                    <h1>Perfiles</h1>

                    <p>{{ link_to_route('admin.perfils.create', 'Add New Pefil', null, array('class' => 'btn btn-lg btn-success')) }}</p>

                    @if ($perfils->count())
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Id_perfil</th>
                                <th>Nom_perfil</th>
                                <th>Nombre_perfil</th>
                                {{--<th>Fecha_hora</th>--}}
                                <th>&nbsp;</th>

                            </tr>
                            </thead>

                            <tbody>
                            @foreach ($perfils as $perfil)
                                <tr>
                                    <td>{{{ $perfil->id_perfil }}}</td>
                                    <td>{{{ $perfil->nom_perfil }}}</td>
                                    <td>{{{ $perfil->nombre_perfil }}}</td>
                                    {{--<td>{{{ $perfil->fecha_hora }}}</td>--}}
                                    <td>
                                        {{ Form::open(array('style' => 'display: inline-block;', 'method' => 'DELETE', 'route' => array('admin.perfils.destroy', $perfil->id))) }}
                                        {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                                        {{ Form::close() }}
                                        {{ link_to_route('admin.perfils.edit', 'Edit', array($perfil->id), array('class' => 'btn btn-info')) }}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @else
                        There are no pefils
                    @endif
                </div>
            </div>
        </div>
    </section>

@stop
