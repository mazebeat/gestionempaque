@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
    Normas
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')
@stop


{{-- Page content --}}
@section('content')
    <section class="content-header">
        <h1>Normas</h1>
        <ol class="breadcrumb">
            <li>
                <a href="#">
                    <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                    Dashboard
                </a>
            </li>
            <li>Mantenedor</li>
            <li class="active">Normas</li>
        </ol>
    </section>
    <section class="content">
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h4 class="panel-title">Formulario</h4>
                    <span class="pull-right"> <i class="glyphicon glyphicon-chevron-up showhide clickable"
                                                 title="Show Panel content"></i>
                        <i class="glyphicon glyphicon-remove removepanel clickable"></i>
                    </span>
                </div>
                <div class="panel-body">
                    <p>{{ link_to_route('admin.normas.create', 'Agregar Norma', null, array('class' => 'btn btn-sm btn-success')) }}</p>

                    @if ($normas->count())
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Local</th>
                                    <th>Nombre norma</th>
                                    <th>Ruta norma</th>
                                    <th>&nbsp;</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach ($normas as $norma)
                                    <tr>
                                        <td>LOCAL TEST</td>
                                        <td>{{{ $norma->nom_norma }}}</td>
                                        <td>{{{ $norma->ruta_norma }}}</td>
                                        <td>
                                            {{ Form::open(array('style' => 'display: inline-block;', 'method' => 'DELETE', 'route' => array('admin.normas.destroy', $norma->id))) }}
                                            {{ Form::submit('Delete', array('class' => 'btn btn-xs btn-danger')) }}
                                            {{ Form::close() }}
                                            {{ link_to_route('admin.normas.edit', 'Edit', array($norma->id), array('class' => 'btn btn-xs btn-info')) }}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        There are no normas
                    @endif
                </div>
            </div>
        </div>
    </section>
@stop
