@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
    Locales
    @parent
    @stop

    {{-- page level styles --}}
    @section('header_styles')
            <!--page level css -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/chartist.js/latest/chartist.min.css">
    <!--end of page level css-->
@stop

{{-- Page content --}}
@section('content')
    <section class="content-header">
        <h1>Reportes</h1>
        <ol class="breadcrumb">
            <li>
                <a href="#">
                    <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                    Dashboard
                </a>
            </li>
            <li class="active">Reportes</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4 class="panel-title">Total Empaques</h4>
                    <span class="pull-right"> <i class="glyphicon glyphicon-chevron-up showhide clickable" title="Show Panel content"></i>
                        <i class="glyphicon glyphicon-remove removepanel clickable"></i>
                    </span>
                    </div>
                    <div class="panel-body">
                        <div>
                            <canvas id="doughnut-chart4" width="800" height="300"></canvas>
                        </div>
                        total de empaques (y por sexo)
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4 class="panel-title">Registrados/Asignados</h4>
                    <span class="pull-right"> <i class="glyphicon glyphicon-chevron-up showhide clickable" title="Show Panel content"></i>
                        <i class="glyphicon glyphicon-remove removepanel clickable"></i>
                    </span>
                    </div>
                    <div class="panel-body">
                        <div>
                            <canvas id="doughnut-chart3" width="800" height="300"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4 class="panel-title">Locales</h4>
                    <span class="pull-right"> <i class="glyphicon glyphicon-chevron-up showhide clickable" title="Show Panel content"></i>
                        <i class="glyphicon glyphicon-remove removepanel clickable"></i>
                    </span>
                    </div>
                    <div class="panel-body">
                        <div>
                            <canvas id="doughnut-chart2" width="800" height="300"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4 class="panel-title">Visitas</h4>
                    <span class="pull-right"> <i class="glyphicon glyphicon-chevron-up showhide clickable" title="Show Panel content"></i>
                        <i class="glyphicon glyphicon-remove removepanel clickable"></i>
                    </span>
                    </div>
                    <div class="panel-body">
                        <div>
                            <div class="ct-chart ct-perfect-fourth"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @stop

    {{-- page level scripts --}}
    @section('footer_scripts')
            <!-- begining of page level js -->
    <script src="//cdn.jsdelivr.net/chartist.js/latest/chartist.min.js"></script>
    <script src="{{ asset('assets/js/pages/chartistjs.js') }}"></script>
@stop