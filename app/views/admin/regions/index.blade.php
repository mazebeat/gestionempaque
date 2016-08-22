@extends('admin.layouts.default')

{{-- Page title --}}
@section('title')
    Regiones
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <link rel="stylesheet" type="text/css"
          href="{{ asset('assets/vendors/datatables/css/dataTables.colReorder.min.css') }}"/>
    <link rel="stylesheet" type="text/css"
          href="{{ asset('assets/vendors/datatables/css/dataTables.scroller.min.css') }}"/>
    <link rel="stylesheet" type="text/css"
          href="{{ asset('assets/vendors/datatables/css/dataTables.bootstrap.css') }}"/>
    <link href="{{ asset('assets/css/pages/tables.css') }}" rel="stylesheet" type="text/css">
@stop

{{-- Page content --}}
@section('content')
    <section class="content-header">
        <h1>Regiones</h1>
        <ol class="breadcrumb">
            <li>
                <a href="#">
                    <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                    Dashboard
                </a>
            </li>
            <li>Mantenedor</li>
            <li class="active">Regiones</li>
        </ol>
    </section>
    <section class="content">
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h4 class="panel-title">...</h4>
                    <span class="pull-right"> <i class="glyphicon glyphicon-chevron-up showhide clickable"
                                                 title="Show Panel content"></i>
                        <i class="glyphicon glyphicon-remove removepanel clickable"></i>
                    </span>
                </div>
                <div class="panel-body">
                    <p>{{ link_to_route('admin.regions.create', 'Agregar Región', null, array('class' => 'btn btn-xs btn-success')) }}</p>

                    @if ($regions->count())
                        <table class="table table-hover table-condensed table-striped table-responsive" id="table1">
                            <thead>
                            <tr>
                                <th>Descripción</th>
                                <th>N° Romano</th>
                                <th>N° Provincias</th>
                                <th>N° Comunas</th>
                                <th>&nbsp;</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach ($regions as $region)
                                <tr>
                                    <td>{{{ $region->str_descripcion }}}</td>
                                    <td>{{{ $region->str_romano }}}</td>
                                    <td>{{{ $region->num_provincias }}}</td>
                                    <td>{{{ $region->num_comunas }}}</td>
                                    <td>
                                        {{ Form::open(array('style' => 'display: inline-block;', 'method' => 'DELETE', 'route' => array('admin.regions.destroy', $region->id))) }}
                                        {{ Form::submit('Delete', array('class' => 'btn btn-xs btn-danger')) }}
                                        {{ Form::close() }}
                                        {{ link_to_route('admin.regions.edit', 'Edit', array($region->id), array('class' => 'btn btn-xs btn-info')) }}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @else
                        There are no regions
                    @endif
                </div>
            </div>
        </div>
    </section>
@stop

{{-- page level scripts --}}
@section('footer_scripts')
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/dataTables.bootstrap.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/datatables.js') }}"></script>
@stop