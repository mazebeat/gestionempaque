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
                    <span class="pull-right"> <i class="glyphicon glyphicon-chevron-up showhide clickable" title="Show Panel content"></i>
                        <i class="glyphicon glyphicon-remove removepanel clickable"></i>
                    </span>
                </div>
                <div class="panel-body">
                    <form class="form-inline">
                        <fieldset>
                            <div class="form-group">
                                <label for="exampleInputEmail2">Local: </label>
                                <select id="selectbasic" name="selectbasic" class="form-control">
                                    <option value="-1"></option>
                                    <option value="1">Local 1</option>
                                    <option value="2">Local 2</option>
                                    <option value="3">Local 3</option>
                                    <option value="4">Local 4</option>
                                </select>
                            </div>
                            &nbsp;
                            <div class="form-group">
                                <label for="exampleInputName2">RUN: </label>
                                <input type="text" class="form-control" id="exampleInputName2" placeholder="">
                            </div>
                            &nbsp;
                            <button type="submit" class="btn btn-info">Buscar</button>
                            &nbsp;
                            <button type="submit" class="btn btn-default">Nuevo</button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h4 class="panel-title"><i class="livicon" data-name="user" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                        Lista Empaques
                    </h4>
                    <span class="pull-right"> <i class="glyphicon glyphicon-chevron-up showhide clickable" title="Show Panel content"></i>
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
                            <tr>
                                <td>11.111.111-1</td>
                                <td>AAAAAAAA BBBBBBBBB</td>
                                <td>CCCCCCCCCCC</td>
                                <td>DDDDDDDDDDDDDD</td>
                                <td>0 días</td>
                                <td>[ 0 ][ 0 ][ 1 ]</td>
                                <td>Empaque</td>
                                <td>Activo</td>
                                <td>
                                    <a href="#"><i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view user"></i></a>
                                    <a href="#"><i class="livicon" data-name="edit" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="update user"></i></a>
                                    <a href="#" data-toggle="modal" data-target="#delete_confirm"><i class="livicon" data-name="user-remove" data-size="18" data-loop="true" data-c="#f56954"
                                                                                                                                                 data-hc="#f56954" title="delete user"></i></a>                                   
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@stop

{{-- page level scripts --}}
@section('footer_scripts')
@stop
