@extends('admin.layouts.default')

{{-- Page title --}}
@section('title')
    Accesos
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
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h4 class="panel-title">...</h4>
                    <span class="pull-right"> <i class="glyphicon glyphicon-chevron-up showhide clickable"
                                                 title="Show Panel content"></i>
                        <i class="glyphicon glyphicon-remove removepanel clickable"></i>
                    </span>
                </div>
                <div class="panel-body">
                    {{--<h1>Accesos</h1>--}}

                    <p>{{ link_to_route('admin.accesos.create', 'Agregar Acceso', null, array('class' => 'btn btn-xs btn-success')) }}</p>

                    @if ($accesos->count())
                        <table class="table table-hover table-condensed table-striped table-responsive" id="table1">
                            <thead>
                            <tr>
                                {{--<th>Id_acceso</th>--}}
                                <th>Nombre acceso</th>
                                <th>Usuario</th>
                                {{--<th>Fecha_hora</th>--}}
                                <th>&nbsp;</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach ($accesos as $acceso)
                                <tr>
                                    {{--<td>{{{ $acceso->id_acceso }}}</td>--}}
                                    <td>{{{ $acceso->nom_acceso }}}</td>
                                    <td>{{{ $acceso->nombre_usuario }}}</td>
                                    {{--                                    <td>{{{ $acceso->fecha_hora }}}</td>--}}
                                    <td>
                                        {{ Form::open(array('style' => 'display: inline-block;', 'method' => 'DELETE', 'route' => array('admin.accesos.destroy', $acceso->id))) }}
                                        {{ Form::submit('Eliminar', array('class' => 'btn btn-xs btn-danger')) }}
                                        {{ Form::close() }}
                                        {{ link_to_route('admin.accesos.edit', 'Editar', array($acceso->id), array('class' => 'btn btn-xs btn-info')) }}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    @else
                        There are no accesos
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