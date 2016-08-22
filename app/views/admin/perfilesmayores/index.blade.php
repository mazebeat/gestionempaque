@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
    Perfiles Mayores
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')
@stop


{{-- Page content --}}
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
                    <span class="pull-right"> <i class="glyphicon glyphicon-chevron-up showhide clickable"
                                                 title="Show Panel content"></i>
                        <i class="glyphicon glyphicon-remove removepanel clickable"></i>
                    </span>
                </div>
                <div class="panel-body">
                    <form class="form-inline">
                        <fieldset>
                            <div class="form-group">
                                <label for="exampleInputName2">RUN: </label>
                                <input type="text" class="form-control" id="exampleInputName2" placeholder="">
                            </div>
                            &nbsp;
                            <div class="form-group">
                                <label for="exampleInputEmail2">Perfil: </label>
                                <select id="selectbasic" name="selectbasic" class="form-control">
                                    <option value="1">Perfil 1</option>
                                    <option value="2">Perfil 2</option>
                                    <option value="3">Perfil 3</option>
                                    <option value="4">Perfil 4</option>
                                </select>
                            </div>
                            &nbsp;
                            <button type="submit" class="btn btn-info">Buscar</button>

                            <br>

                            <h3 class="title">Datos Usuario</h3>

                            <ul class="list-unstyled">
                                <li><strong>RUN:</strong> 11.111.111-1</li>
                                <li><strong>Nombre:</strong> Usuario Demo Demo</li>
                                <li><strong>Email:</strong> demo@demo.cl</li>
                                <li><strong>Teléfono:</strong> 56 2 2111 1111</li>
                            </ul>

                            <div class="form-group">
                                <label for="exampleInputEmail2">Perfil: </label>
                                <select id="selectbasic" name="selectbasic" class="form-control">
                                    <option value="1">Perfil 1</option>
                                    <option value="2">Perfil 2</option>
                                    <option value="3">Perfil 3</option>
                                    <option value="4">Perfil 4</option>
                                </select>
                            </div>
                            &nbsp;
                            <button type="submit" class="btn btn-alert">Asignar</button>

                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h4 class="panel-title">Formulario</h4>
                    <span class="pull-right"> <i class="glyphicon glyphicon-chevron-up showhide clickable"
                                                 title="Show Panel content"></i>
                        <i class="glyphicon glyphicon-remove removepanel clickable"></i>
                    </span>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal">
                        <fieldset>

                            <!-- Form Name -->
                        {{--<legend>Form Name</legend>--}}

                        <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="name">Nombre Perfil</label>

                                <div class="col-md-6">
                                    <input id="name" name="name" placeholder="" class="form-control input-md"
                                           required="" type="text">
                                </div>
                            </div>

                            <!-- Button -->
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="pull-right">
                                        <button id="btnNew" name="btnNew" class="btn btn-primary">Nuevo</button>
                                        <button id="btnUpdate" name="btnUpdate" class="btn btn-info">Actualizar</button>
                                        <button id="btnDelete" name="btnDelete" class="btn btn-danger">Eliminar</button>
                                        <button id="btnClean" name="btnClean" class="btn btn-link">Limpiar</button>
                                    </div>
                                </div>
                            </div>

                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel panel-warning">
                <div class="panel-heading">
                    <h4 class="panel-title">Creados</h4>
                    <span class="pull-right"> <i class="glyphicon glyphicon-chevron-up showhide clickable"
                                                 title="Show Panel content"></i>
                        <i class="glyphicon glyphicon-remove removepanel clickable"></i>
                    </span>
                </div>
                <div class="panel-body">
                    <div class="table-responsive table-scrollable text-center">
                        <table class="table table-hover table-condensed">
                            <thead>
                            <tr>
                                <th class="text-center">Perfil</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Perfil 1</td>
                            </tr>
                            <tr>
                                <td>Perfil 2</td>
                            </tr>
                            <tr>
                                <td>Perfil 3</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

{{-- page level scripts --}}
@section('footer_scripts')
@stop
