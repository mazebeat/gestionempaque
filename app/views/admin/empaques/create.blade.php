@extends('admin.layouts.default')

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
            <li class="active">Empaque</li>
        </ol>
    </section>
    <section class="content">
        <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h4 class="panel-title">Agregar Empaque</h4>
                    <span class="pull-right"> <i class="glyphicon glyphicon-chevron-up showhide clickable"
                                                 title="Show Panel content"></i>
                        <i class="glyphicon glyphicon-remove removepanel clickable"></i>
                    </span>
                </div>
                <div class="panel-body">

                    <div class="row">
                        <div class="col-md-10 col-md-offset-2">
                            {{--<h1>Create Empaque</h1>--}}

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        {{ implode('', $errors->all('<li class="error">:message</li>')) }}
                                    </ul>
                                </div>
                            @endif
                        </div>
                    </div>

                    {{ Form::open(array('route' => 'admin.empaques.store', 'class' => 'form-horizontal','id'  =>'formCreateEmpaque')) }}

                    <div class="form-group">
                        {{ Form::label('id_usuario', 'RUN:', array('class'=>'col-md-2 control-label')) }}
                        <div class="col-sm-10">
                            {{ Form::text('id_usuario', Input::old('id_usuario'), array('class'=>'form-control', 'placeholder'=>'Id_usuario')) }}
                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('nombre', 'Nombre:', array('class'=>'col-md-2 control-label')) }}
                        <div class="col-sm-10">
                            {{ Form::text('nombre', Input::old('nombre'), array('class'=>'form-control', 'placeholder'=>'Nombre')) }}
                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('ape_paterno', 'Apellido Paterno:', array('class'=>'col-md-2 control-label')) }}
                        <div class="col-sm-10">
                            {{ Form::text('ape_paterno', Input::old('ape_paterno'), array('class'=>'form-control', 'placeholder'=>'Ape_paterno')) }}
                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('ape_materno', 'Apellido Materno:', array('class'=>'col-md-2 control-label')) }}
                        <div class="col-sm-10">
                            {{ Form::text('ape_materno', Input::old('ape_materno'), array('class'=>'form-control', 'placeholder'=>'Ape_materno')) }}
                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('id_region', 'Región:', array('class'=>'col-md-2 control-label')) }}
                        <div class="col-sm-10">
                            {{ Form::input('number', 'id_region', Input::old('id_region'), array('class'=>'form-control')) }}
                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('id_provincia', 'Provincia:', array('class'=>'col-md-2 control-label')) }}
                        <div class="col-sm-10">
                            {{ Form::input('number', 'id_provincia', Input::old('id_provincia'), array('class'=>'form-control')) }}
                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('id_comuna', 'Comuna:', array('class'=>'col-md-2 control-label')) }}
                        <div class="col-sm-10">
                            {{ Form::input('number', 'id_comuna', Input::old('id_comuna'), array('class'=>'form-control')) }}
                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('direccion', 'Dirección:', array('class'=>'col-md-2 control-label')) }}
                        <div class="col-sm-10">
                            {{ Form::text('direccion', Input::old('direccion'), array('class'=>'form-control', 'placeholder'=>'Direccion')) }}
                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('telefono', 'Teléfono:', array('class'=>'col-md-2 control-label')) }}
                        <div class="col-sm-10">
                            {{ Form::text('telefono', Input::old('telefono'), array('class'=>'form-control', 'placeholder'=>'Telefono')) }}
                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('email', 'Email:', array('class'=>'col-md-2 control-label')) }}
                        <div class="col-sm-10">
                            {{ Form::text('email', Input::old('email'), array('class'=>'form-control', 'placeholder'=>'Email')) }}
                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('sexo', 'Sexo:', array('class'=>'col-md-2 control-label')) }}
                        <div class="col-sm-10">
                            {{--                            {{ Form::text('sexo', Input::old('sexo'), array('class'=>'form-control', 'placeholder'=>'Sexo')) }}--}}
                            <div class="radio-inline">
                                <label>
                                    {{ Form::radio('sexo', 'F', false, ['class' => 'field']) }}
                                    Femenino
                                </label>
                            </div>

                            <div class="radio-inline">
                                <label>
                                    {{ Form::radio('sexo', 'M', false, ['class' => 'field']) }}
                                    Masculino
                                </label>
                            </div>
                            <div class="radio-inline">
                                <label>
                                    {{ Form::radio('sexo', 'N', false, ['class' => 'field']) }}
                                    NN
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('fecha_nacimiento', 'Fecha Nacimiento:', array('class'=>'col-md-2 control-label')) }}
                        <div class="col-sm-10">
                            {{ Form::input('date', 'fecha_nacimiento', Input::old('fecha_nacimiento'), array('class'=>'form-control', 'placeholder'=>'Fecha_nacimiento')) }}
                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('id_casa_estudio', 'Casa Estudio:', array('class'=>'col-md-2 control-label')) }}
                        <div class="col-sm-10">
                            {{ Form::input('number', 'id_casa_estudio', Input::old('id_casa_estudio'), array('class'=>'form-control')) }}
                        </div>
                    </div>

                    {{--<div class="form-group">--}}
                    {{--{{ Form::label('id_perfil', 'Id_perfil:', array('class'=>'col-md-2 control-label')) }}--}}
                    {{--<div class="col-sm-10">--}}
                    <?php /* TODO: verificar id perfil */ ?>
                    {{ Form::input('hidden', 'id_perfil', Input::old('id_perfil', 3)) }}
                    {{--</div>--}}
                    {{--</div>--}}

                    <div class="form-group">
                        {{ Form::label('id_local', 'Local:', array('class'=>'col-md-2 control-label')) }}
                        <div class="col-sm-10">
                            {{ Form::input('number', 'id_local', Input::old('id_local'), array('class'=>'form-control')) }}
                        </div>
                    </div>

                    {{--<div class="form-group">--}}
                    {{--                        {{ Form::label('bloqueado', 'Bloqueado:', array('class'=>'col-md-2 control-label')) }}--}}
                    {{--<div class="col-sm-10">--}}
                    {{--{{ Form::checkbox('bloqueado') }}--}}
                    {{  Form::input('hidden', 'bloqueado', Input::old('bloqueado', false)) }}
                    {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="form-group">--}}
                    {{--                        {{ Form::label('nombre_usuario', 'Nombre_usuario:', array('class'=>'col-md-2 control-label')) }}--}}
                    {{--<div class="col-sm-10">--}}
                    {{--{{ Form::intpu('hidden', 'nombre_usuario', Input::old('nombre_usuario', Auth::user()->nombre)) }}--}}
                    <?php /* TODO: Descomentar cuando este listo el login */ ?>
                    {{ Form::input('hidden', 'nombre_usuario', Input::old('nombre_usuario', 'SNT')) }}
                    {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="form-group">--}}
                    {{--                        {{ Form::label('fecha_hora', 'Fecha_hora:', array('class'=>'col-md-2 control-label')) }}--}}
                    {{--<div class="col-sm-10">--}}
                    {{ Form::input('hidden', 'fecha_hora', Input::old('fecha_hora', Carbon::now())) }}
                    {{--</div>--}}
                    {{--</div>--}}

                    <div class="form-group">
                        <label class="col-sm-2 control-label">&nbsp;</label>

                        <div class="col-sm-10">
                            {{ Form::submit('Agregar', array('class' => 'btn btn btn-primary')) }}
                        </div>
                    </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </section>
@stop

{{-- page level scripts --}}
@section('footer_scripts')
    {{-- Form Validation --}}
    {{ HTML::script('assets/vendors/formvalidation/js/formValidation.js') }}
    {{ HTML::script('assets/vendors/formvalidation/js/framework/bootstrap.min.js') }}
    {{ HTML::script('assets/vendors/formvalidation/js/language/es_CL.min.js')  }}


    {{ HTML::script('assets/js/jquery.rut.min.js') }}
    <script>
        $(function () {
            $("#id_usuario").rut({
                formatOn: 'change keyup',
                validateOn: 'change keyup'
            });

            $('#formCreateEmpaque').formValidation({
                framework: 'bootstrap',
                excluded: [':disabled', ':hidden'],
                live: 'enabled',
                locale: 'es_CL',
                fields: {
                    'id_usuario': {
                        validators: {
                            notEmpty: {
                                message: 'Debe ingresar su RUN'
                            },
                            callback: {
                                callback: function (value, validator) {
                                    return $.validateRut(value);
                                },
                                message: 'El campo RUT es incorrecto'
                            },
                            stringLength: {
                                min: 8,
                                max: 12
                            }
                        }
                    },
                    'nombre': {
                        validators: {
                            notEmpty: {
                                message: 'Debe ingresar sus nombres'
                            }
                        }

                    },
                    'ape_paterno': {
                        validators: {
                            notEmpty: {
                                message: 'Debe ingresar su apellido paterno'
                            }
                        }
                    },
                    'ape_materno': {
                        validators: {
                            notEmpty: {
                                message: 'Debe ingresar su apellido materno'
                            }
                        }
                    },
                    'email': {
                        validators: {
                            notEmpty: {
                                message: 'Debe ingresar su email'
                            },
                            emailAddress: {
                                message: 'El mail ingresado no es correcto'
                            }
                        }
                    },
                    'sexo': {
                        validators: {
                            notEmpty: {
                                message: 'Debe mencionar su sexo'
                            }
                        }
                    },
                    'fecha_nacimiento': {
                        validators: {
                            notEmpty: {
                                message: 'Debe ingresar su fecha de naciemiento'
                            },
                            date: {
                                message: 'La fecha ingresada no es valida',
                                format: 'YYYY-MM-DD'
                            }
                        }
                    },
                    'pass': {
                        validators: {
                            notEmpty: {
                                message: 'Debe ingresar una password'
                            },
                            identical: {
                                field: 'password_confirmation',
                                message: 'La password ingresada no coincide'
                            }

                        }
                    },
                    'password_confirmation': {
                        validators: {
                            notEmpty: {
                                message: 'Debe confirmar la password ingresada'
                            },
                            identical: {
                                field: 'pass',
                                message: 'La password ingresada no coincide'
                            }

                        }
                    },
                    'accept_terms': {
                        validators: {
                            notEmpty: {
                                message: 'Debe aceptar los terminos y condiciones'
                            }
                        }
                    }
                }
            });

        });
    </script>
@stop