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
                    {{ link_to_route('admin.empaques.index', 'Volver', null, array('class'=>'btn btn-xs btn-link')) }}

                    <div class="table-responsive">
                        <table class="table table-striped table-condensed">
                            <thead>
                            <tr>
                                <th>Id_usuario</th>
                                <th>Nombre</th>
                                <th>Ape_paterno</th>
                                <th>Ape_materno</th>
                                <th>Id_region</th>
                                <th>Id_provincia</th>
                                <th>Id_comuna</th>
                                <th>Direccion</th>
                                <th>Telefono</th>
                                <th>Email</th>
                                <th>Sexo</th>
                                <th>Fecha_nacimiento</th>
                                <th>Id_casa_estudio</th>
                                <th>Id_perfil</th>
                                <th>Id_local</th>
                                <th>Bloqueado</th>
                                <th>Nombre_usuario</th>
                                <th>Fecha_hora</th>
                            </tr>
                            </thead>

                            <tbody>
                            <tr>
                                <td>{{{ $empaque->id_usuario }}}</td>
                                <td>{{{ $empaque->nombre }}}</td>
                                <td>{{{ $empaque->ape_paterno }}}</td>
                                <td>{{{ $empaque->ape_materno }}}</td>
                                <td>{{{ $empaque->id_region }}}</td>
                                <td>{{{ $empaque->id_provincia }}}</td>
                                <td>{{{ $empaque->id_comuna }}}</td>
                                <td>{{{ $empaque->direccion }}}</td>
                                <td>{{{ $empaque->telefono }}}</td>
                                <td>{{{ $empaque->email }}}</td>
                                <td>{{{ $empaque->sexo }}}</td>
                                <td>{{{ $empaque->fecha_nacimiento }}}</td>
                                <td>{{{ $empaque->id_casa_estudio }}}</td>
                                <td>{{{ $empaque->id_perfil }}}</td>
                                <td>{{{ $empaque->id_local }}}</td>
                                <td>{{{ $empaque->bloqueado }}}</td>
                                <td>{{{ $empaque->nombre_usuario }}}</td>
                                <td>{{{ $empaque->fecha_hora }}}</td>
                                <td>
                                    {{ Form::open(array('style' => 'display: inline-block;', 'method' => 'DELETE', 'route' => array('admin.empaques.destroy', $empaque->id))) }}
                                    {{ Form::submit('Eliminar', array('class' => 'btn btn-xs btn-danger')) }}
                                    {{ Form::close() }}
                                    {{ link_to_route('admin.empaques.edit', 'Editar', array($empaque->id), array('class' => 'btn btn-xs btn-info')) }}
                                </td>
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

