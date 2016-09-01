@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
    Empaques
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')
@stop

{{-- Page content --}}
@section('content')
    <section class="content-header">
        <h1>Empaques</h1>
        <ol class="breadcrumb">
            <li>
                <a href="#">
                    <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                    Dashboard
                </a>
            </li>
            <li>Mantenedor</li>
            <li class="active">Empaques</li>
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
                    {{ Form::open(['url' => 'admin/empaques/search', 'method' => 'POST', 'role' => 'form', 'class' => 'form-inline']) }}
                    <fieldset>
                        <div class="form-group">
                            <label for="id_local">Local: </label>
                            {{ Form::chosen('id_local', $locales, Input::old('id_local'), array('class'=> 'form-control')) }}
                        </div>
                        <div class="form-group">
                            <label for="id_usuario">RUN: </label>
                            <input type="text" name="id_usuario" class="form-control" id="id_usuario" placeholder=""
                                   value="{{ Input::old('id_usuario') }}">
                        </div>
                        <button type="submit" class="btn btn-info">Buscar</button>
                        {{ link_to_route('admin.empaques.create', 'Nuevo', null, array('class' => 'btn btn-success pull-right')) }}
                        {{ link_to_route('admin.empaques.index', 'Limpiar', null, array('class' => 'btn btn-link')) }}
                    </fieldset>
                    {{ Form::close() }}
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h4 class="panel-title"><i class="livicon" data-name="user" data-size="16" data-loop="true"
                                               data-c="#fff" data-hc="white"></i>
                        Lista Empaques
                    </h4>
                    <span class="pull-right"> <i class="glyphicon glyphicon-chevron-up showhide clickable"
                                                 title="Show Panel content"></i>
                        <i class="glyphicon glyphicon-remove removepanel clickable"></i>
                    </span>
                </div>
                <div class="panel-body">
                    <table class="table table-hover table-condensed table-striped table-responsive" id="table1">
                        <thead>
                        <tr class="filters">
                            <th>RUT</th>
                            <th>Nombres</th>
                            <th>Apellido P.</th>
                            <th>Apellido M.</th>
                            <th>Ult.Tur.</th>
                            <th>Faltas</th>
                            <th>Cargo</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($empaques as $empaque)
                            <tr>
                                <td>{{ $empaque->id_usuario }}</td>
                                <td>{{ $empaque->nombre }}</td>
                                <td>{{ $empaque->ape_paterno }}</td>
                                <td>{{ $empaque->ape_materno }}</td>
                                <td>{{ $empaque->lastTurn() }} días</td>
                                <td>{{ $empaque->faltasHtml() }}</td>
                                <td>Empaque</td>
                                <td>{{ $empaque->state() }}</td>
                                <td>
                                    <a href="#" class="btn btn-xs btn-link"><i class="livicon" data-name="info"
                                                                               data-size="18" data-loop="true"
                                                                               data-c="#428BCA" data-hc="#428BCA"
                                                                               title="view user"></i></a>
                                    {{ Form::open(array('style' => 'display: inline-block;', 'method' => 'DELETE', 'route' => array('admin.empaques.destroy', $empaque->id))) }}
                                    <button type="submit" class="btn btn-xs btn-link"><i class="livicon"
                                                                                         data-name="user-remove"
                                                                                         data-size="18" data-loop="true"
                                                                                         data-c="#f56954"
                                                                                         data-hc="#f56954"
                                                                                         title="delete user"></i>
                                    </button>
                                    {{ Form::close() }}
                                    <a href="{{ URL::route('admin.empaques.edit', array($empaque->id)) }}"
                                       class="btn btn-xs btn-link">
                                        <i class="livicon" data-name="edit" data-size="18" data-loop="true"
                                           data-c="#428BCA" data-hc="#428BCA" title="Editar"></i>
                                    </a>
                                    <a href="{{ URL::to('admin/empaques/changestate', array($empaque->id)) }}"
                                       class="btn btn-xs btn-link">
                                        <i class="livicon"
                                           data-name="{{ $empaque->state() == 'Activo' ? 'unlock' : 'lock' }}"
                                           data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA"
                                           title="Cambiar Estado"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@stop

{{-- page level scripts --}}
@section('footer_scripts')
    {{ HTML::script('assets/js/jquery.rut.min.js') }}
    <script>
        $(function () {
            $("#id_usuario").rut({
                formatOn: 'change keyup',
                validateOn: 'change keyup'
            });
        });
    </script>
@stop
