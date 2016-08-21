@extends('admin.layouts.default')

{{-- Page title --}}
@section('title')
    Provincias
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')
@stop

{{-- Page content --}}
@section('content')
    <section class="content-header">
        <h1>Provincias {{ link_to_route('admin.provincia.index', 'Volver', null, array('class'=>'btn btn-xs btn-link')) }}</h1>
        <ol class="breadcrumb">
            <li>
                <a href="#">
                    <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                    Dashboard
                </a>
            </li>
            <li>Mantenedor</li>
            <li class="active">Provincias</li>
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

                    {{--<h1>Show Provincium</h1>--}}

                    <table class="table table-striped">
                        <thead>
                        <tr>
                            {{--<th>Id_pr</th>--}}
                            {{--<th>Id_re</th>--}}
                            <th>Descripción</th>
                            <th>Número comunas</th>
                        </tr>
                        </thead>

                        <tbody>
                        <tr>
{{--                            <td>{{{ $provincium->id_pr }}}</td>--}}
{{--                            <td>{{{ $provincium->id_re }}}</td>--}}
                            <td>{{{ $provincium->str_descripcion }}}</td>
                            <td>{{{ $provincium->num_comunas }}}</td>
                            <td>
                                {{ Form::open(array('style' => 'display: inline-block;', 'method' => 'DELETE', 'route' => array('admin.provincia.destroy', $provincium->id))) }}
                                {{ Form::submit('Eliminar', array('class' => 'btn btn-xs btn-danger')) }}
                                {{ Form::close() }}
                                {{ link_to_route('admin.provincia.edit', 'Editar', array($provincium->id), array('class' => 'btn btn-xs btn-info')) }}
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@stop
