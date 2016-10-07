<!DOCTYPE html>
<html>

<head>
    <title>Usuarios | Gestión Empaques</title>
    <!-- global level css -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet"/>
    <!-- end of global level css -->
    <!-- page level css -->
    <link href="{{ asset('assets/css/pages/login2.css') }}" rel="stylesheet"/>
    <!-- styles of the page ends-->
</head>

<body>
<div class="container">
    <div class="row vertical-offset-100">
        <div class=" col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-5 col-md-offset-4 col-lg-4 col-lg-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title text-center">Inicio de Sesión</h3>
                </div>
                <div class="panel-body">

                @include('notifications')

                {{ Form::open(array('url' => 'user',  'method' => 'POST', 'autocomplete' => 'on', 'role' => 'form')) }}
                {{--<form action="{{ route('calendarsignin') }}" autocomplete="on" method="post" role="form">--}}
                <!-- CSRF Token -->
                    <input type="hidden" name="_token" value="{{ csrf_token() }}"/>

                    <div class="form-group {{ $errors->first('email', 'has-error') }}">
                        <input class="form-control" placeholder="{{ Lang::get('auth/form.email') }}" name="email"
                               type="text"/>

                        <div class="col-sm-12">
                            {{ $errors->first('email', '<span class="help-block">:message</span>') }}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->first('password', 'has-error') }}">
                        <input class="form-control" placeholder="{{ Lang::get('auth/form.password') }}" name="password"
                               type="password"/>

                        <div class="col-sm-12">
                            {{ $errors->first('password', '<span class="help-block">:message</span>') }}
                        </div>
                    </div>
                    <div class="form-group">
                        <a href="#" class=" pull-right">Recuperar Contraseña</a>

                        <div class="checkbox">
                            <label><input name="remember" type="checkbox"
                                          value="true">{{ Lang::get('button.rememberme') }}</label>
                        </div>
                    </div>
                    <input type="submit" value="{{ Lang::get('button.submit') }}"
                           class="btn btn-primary btn-block btn-lg"/>
                    {{--</form>--}}
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- global js -->
<script src="{{ asset('assets/js/jquery-1.11.1.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}" type="text/javascript"></script>
<!-- end of global js -->
<!-- begining of page level js-->
<script src="{{ asset('assets/js/TweenLite.min.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $(document).mousemove(function (event) {
            TweenLite.to($('body'), .5, {
                css: {
                    backgroundPosition: "" + parseInt(event.pageX / 8) + "px " + parseInt(event.pageY / '12') + "px, " + parseInt(event.pageX / '15') + "px " + parseInt(event.pageY / '15') + "px, " + parseInt(event.pageX / '30') + "px " + parseInt(event.pageY / '30') + "px"
                }
            });
        });
    });
</script>