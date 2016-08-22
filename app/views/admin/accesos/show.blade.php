@extends('admin.layouts.default')

{{-- Page title --}}
@section('title')
    Accesos
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')
@stop

{{-- Page content --}}
@section('content')
    <section class="content-header">
        <h1>Accesos</h1>
        <ol class="breadcrumb">
            <li>
                <a href="#">
                    <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                    Dashboard
                </a>
            </li>
            <li>Mantenedor</li>
            <li class="active">Accesos</li>
        </ol>
    </section>
    <section class="content">
        <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h4 class="panel-title">... </h4>
                    <span class="pull-right"> <i class="glyphicon glyphicon-chevron-up showhide clickable"
                                                 title="Show Panel content"></i>
                        <i class="glyphicon glyphicon-remove removepanel clickable"></i>
                    </span>
                </div>
                <div class="panel-body">
                    {{--<h1>Show Acceso</h1>--}}

                    <p>{{ link_to_route('admin.accesos.index', 'Volver', null, array('class'=>'btn btn-primary')) }}</p>

                    <table class="table table-striped">
                        <thead>
                        <tr>
                            {{--<th>Id_acceso</th>--}}
                            <th>Nombre acceso</th>
                            <th>Usuario</th>
                            {{--<th>Fecha_hora</th>--}}
                        </tr>
                        </thead>

                        <tbody>
                        <tr>
                            {{--                            <td>{{{ $acceso->id_acceso }}}</td>--}}
                            <td>{{{ $acceso->nom_acceso }}}</td>
                            <td>{{{ $acceso->nombre_usuario }}}</td>
                            {{--                            <td>{{{ $acceso->fecha_hora }}}</td>--}}
                            <td>
                                {{ Form::open(array('style' => 'display: inline-block;', 'method' => 'DELETE', 'route' => array('admin.accesos.destroy', $acceso->id))) }}
                                {{ Form::submit('Eliminar', array('class' => 'btn btn-danger')) }}
                                {{ Form::close() }}
                                {{ link_to_route('admin.accesos.edit', 'Editar', array($acceso->id), array('class' => 'btn btn-info')) }}
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@stop
