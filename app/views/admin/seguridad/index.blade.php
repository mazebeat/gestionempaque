@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
    Locales
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')
@stop


{{-- Page content --}}
@section('content')
    <section class="content-header">
        <h1>Locales</h1>
        <ol class="breadcrumb">
            <li>
                <a href="#">
                    <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                    Dashboard
                </a>
            </li>
            <li>Mantenedor</li>
            <li class="active">Locales</li>
        </ol>
    </section>
    <section class="content">
        <div class="col-md-6">
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
                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="name">Nombre</label>

                                <div class="col-md-6">
                                    <input id="name" name="name" placeholder="..." class="form-control input-md"
                                           required="" type="text">

                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="address">Dirección</label>

                                <div class="col-md-6">
                                    <input id="address" name="address" placeholder="..." class="form-control input-md"
                                           required="" type="text">

                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="contactname">Nombre Contacto</label>

                                <div class="col-md-6">
                                    <input id="contactname" name="contactname" placeholder="..."
                                           class="form-control input-md" required="" type="text">

                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="contactphone">Teléfono Contacto</label>

                                <div class="col-md-6">
                                    <input id="contactphone" name="contactphone" placeholder="..."
                                           class="form-control input-md" required="" type="text">
                                    <span class="help-block">ej: +56 9 1234 5678</span>
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
        <div class="col-md-6">
            <div class="panel panel-warning">
                <div class="panel-heading">
                    <h4 class="panel-title">Registrados</h4>
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
                                <th class="text-center">Nombre</th>
                                <th class="text-center">Direccion</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Local 1</td>
                                <td>Dirección 1</td>
                            </tr>
                            <tr>
                                <td>Local 2</td>
                                <td>Dirección 2</td>
                            </tr>
                            <tr>
                                <td>Local 3</td>
                                <td>Dirección 3</td>
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
