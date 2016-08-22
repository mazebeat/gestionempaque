@extends('admin.layouts.default')

{{-- Page title --}}
@section('title')
    Comunas
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')
@stop

{{-- Page content --}}
@section('content')
    <section class="content-header">
        <h1>Provincias</h1>
        <ol class="breadcrumb">
            <li>
                <a href="#">
                    <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                    Dashboard
                </a>
            </li>
            <li>Mantenedor</li>
            <li class="active">Comunas</li>
        </ol>
    </section>
    <section class="content">
        <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h4 class="panel-title">Busqueda</h4>
                    <span class="pull-right"> <i class="glyphicon glyphicon-chevron-up showhide clickable"
                                                 title="Show Panel content"></i>
                        <i class="glyphicon glyphicon-remove removepanel clickable"></i>
                    </span>
                </div>
                <div class="panel-body">

                    <h1>Show Comuna</h1>

                    <p>{{ link_to_route('admin.comunas.index', 'Return to All comunas', null, array('class'=>'btn btn-lg btn-primary')) }}</p>

                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Id_co</th>
                            <th>Id_pr</th>
                            <th>Str_descripcion</th>
                        </tr>
                        </thead>

                        <tbody>
                        <tr>
                            <td>{{{ $comuna->id_co }}}</td>
                            <td>{{{ $comuna->id_pr }}}</td>
                            <td>{{{ $comuna->str_descripcion }}}</td>
                            <td>
                                {{ Form::open(array('style' => 'display: inline-block;', 'method' => 'DELETE', 'route' => array('admin.comunas.destroy', $comuna->id))) }}
                                {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                                {{ Form::close() }}
                                {{ link_to_route('admin.comunas.edit', 'Edit', array($comuna->id), array('class' => 'btn btn-info')) }}
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@stop
