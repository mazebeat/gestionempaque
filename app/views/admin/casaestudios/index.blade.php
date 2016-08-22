@extends('admin.layouts.default')

{{-- Page title --}}
@section('title')
    Casas de Estudios
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
        <h1>Casas de Estudio</h1>
        <ol class="breadcrumb">
            <li>
                <a href="#">
                    <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                    Dashboard
                </a>
            </li>
            <li>Mantenedor</li>
            <li class="active">Casa Estudios</li>
        </ol>
    </section>
    <section class="content">
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h4 class="panel-title">Casas de Estudio</h4>
                    <span class="pull-right"> <i class="glyphicon glyphicon-chevron-up showhide clickable"
                                                 title="Show Panel content"></i>
                        <i class="glyphicon glyphicon-remove removepanel clickable"></i>
                    </span>
                </div>
                <div class="panel-body">
                    <p>{{ link_to_route('admin.casaestudios.create', 'Agregar Casa de Estudio', null, array('class' => 'btn btn-xs btn-success')) }}</p>

                    @if ($casaestudios->count())
                        <table class="table table-hover table-condensed table-striped table-responsive" id="table1">
                            <thead>
                            <tr>
                                <th>Descripci&oacute;n</th>
                                <th>&nbsp;</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach ($casaestudios as $casaEstudio)
                                <tr>
                                    <td>{{{ $casaEstudio->str_descripcion }}}</td>
                                    <td>
                                        {{ Form::open(array('style' => 'display: inline-block;', 'method' => 'DELETE', 'route' => array('admin.casaestudios.destroy', $casaEstudio->id))) }}
                                        {{ Form::submit('Eliminar', array('class' => 'btn btn-xs btn-danger')) }}
                                        {{ Form::close() }}
                                        {{ link_to_route('admin.casaestudios.edit', 'Editar', array($casaEstudio->id), array('class' => 'btn btn-xs btn-info')) }}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @else
                        There are no casaestudios
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