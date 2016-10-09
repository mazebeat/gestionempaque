@extends('frontend.layouts.user')

@section('style')
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/takeTurn.min.css') }}"/>
    <style>
        .div-table {
            display: table;
            width: auto;
            background-color: #eee;
            border: 1px solid #666666;
            border-spacing: 5px; /*cellspacing:poor IE support for  this*/
        }

        .div-table-row {
            display: table-row;
            width: auto;
            clear: both;
        }

        .div-table-col {
            float: left; /*fix for  buggy browsers*/
            display: table-column;
            width: 130px;
            background-color: #ccc;
            border: 1px solid #666666;
        }
    </style>
@endsection

@section('content')
    <section class="row">
        <strong class="pull-right">Hora: <span class="time"></span> <i class="fa fa-clock-o"></i></strong>

        <div class="col-xs-12">
            <h1 class="title text-center">{{ Lang::get('general.welcome') }} '{{ Auth::user()->nombre }}'</h1>
            <h2 class="title text-center">{{ date_format(Carbon::now(), 'F Y') }}</h2>
        </div>
        <div class="col-xs-12">
        </div>
        <div class="col-xs-offset-2">
            <div class="div-table" id="tomaTurno" style="float:left;">
                <div align="center">
                    <h4>TOMA DE TURNO</h4>
                </div>
                <div class="div-table-row">
                    <div class="div-table-col" align="center">Dia</div>
                    <div class="div-table-col" align="center">Hora Comienzo</div>
                    <div class="div-table-col" align="center">Hora Termino</div>
                </div>
                <div class="div-table-row">
                    <div class="div-table-col">
                        <select readonly="readonly">
                            <option value="LUNES">LUNES</option>
                            <option value="MARTES">MARTES</option>
                            <option value="MIERCOLES">MIERCOLES</option>
                            <option value="JUEVES">JUEVES</option>
                            <option value="VIERNES">VIERNES</option>
                            <option value="SABADO">SABADO</option>
                            <option value="DOMINGO">DOMINGO</option>
                        </select>
                    </div>
                    <div class="div-table-col">
                        <input type="time" name="HoraInicioTurno" style="height:21px;" readonly="readonly">
                    </div>
                    <div class="div-table-col">
                        <input type="time" name="HoraTerminoTurno" style="height:21px;" readonly="readonly">
                    </div>
                </div>
                <div class="div-table-row">
                    <input type="button" value="Actualizar!">
                </div>
            </div>
            <div class="div-table" id="Repechaje" style="float:left;">
                <div align="center">
                    <h4>REPECHAJE</h4>
                </div>
                <div class="div-table-row">
                    <div class="div-table-col" align="center">Dia</div>
                    <div class="div-table-col" align="center">Hora Comienzo</div>
                    <div class="div-table-col" align="center">Hora Termino</div>
                </div>
                <div class="div-table-row">
                    <div class="div-table-col">
                        <select readonly="readonly">
                            <option value="LUNES">LUNES</option>
                            <option value="MARTES">MARTES</option>
                            <option value="MIERCOLES">MIERCOLES</option>
                            <option value="JUEVES">JUEVES</option>
                            <option value="VIERNES">VIERNES</option>
                            <option value="SABADO">SABADO</option>
                            <option value="DOMINGO">DOMINGO</option>
                        </select>
                    </div>
                    <div class="div-table-col">
                        <input type="time" name="HoraInicioRepechaje" style="height:21px;" readonly="readonly">
                    </div>
                    <div class="div-table-col">
                        <input type="time" name="HoraTerminoRepechaje" style="height:21px;" readonly="readonly">
                    </div>
                </div>
                <div class="div-table-row">
                    <input type="button" value="Actualizar!">
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
    {{--<script type="text/javascript" src="{{ asset('frontend/js/takeTurn.min.js') }}"></script>--}}
@endsection
