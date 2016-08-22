@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
    Turnos
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')
@stop


{{-- Page content --}}
@section('content')
    <section class="content-header">
        <h1>Planilla</h1>
        <ol class="breadcrumb">
            <li>
                <a href="#">
                    <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                    Dashboard
                </a>
            </li>
            <li>Mantenedor</li>
            <li class="active">Planilla</li>
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
                                <label class="col-md-4 control-label" for="dia_semana">Día Semana</label>

                                <div class="col-md-6">
                                    {{ Form::select('dia_semana', ['Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo'], Input::old('dia_semana'), ['class' => 'form-control']) }}
                                </div>
                            </div>


                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="hora_inicio_turno">Hora Inicio Turno</label>

                                <div class="col-md-6">
                                    <input id="hora_inicio_turno" name="hora_inicio_turno" placeholder="..."
                                           class="form-control input-md" required="" type="text">
                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="hora_fin_turno">Hora Fin Turno</label>

                                <div class="col-md-6">
                                    <input id="hora_fin_turno" name="hora_fin_turno" placeholder="..."
                                           class="form-control input-md" required="" type="text">
                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="max_empaques">Máx. Empaques</label>

                                <div class="col-md-6">
                                    {{ Form::number('max_empaques', Input::old('max_empaques') ,['class' => 'form-control']) }}
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
        <div class="col-md-12">
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
                                <th class="text-center">Día Semana</th>
                                <th class="text-center">Hora Inicio</th>
                                <th class="text-center">Hora Fin</th>
                                <th class="text-center">Cantidad Empaques</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Lunes</td>
                                <td>09:00</td>
                                <td>10:00</td>
                                <td>10</td>
                            </tr>
                            <tr>
                                <td>Lunes</td>
                                <td>10:30</td>
                                <td>12:00</td>
                                <td>8</td>
                            </tr>
                            <tr>
                                <td>Lunes</td>
                                <td>13:00</td>
                                <td>14:30</td>
                                <td>12</td>
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
