@extends('frontend.layouts.default')

@section('style')
@endsection

@section('content')
    <!-- Container Section Start -->
    <div class="container">
        <div class="row">
            <!-- Contact form Section Start -->
            <h2>Formulario de Registro</h2>

            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    @if(Session::has('message'))
                        <div class="alert alert-danger alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            Oh snap! {{ Session::get('message') }}.
                        </div>
                    @endif

                    @if ($errors->any() && Config::get('app.debug'))
                    <div class="alert alert-danger">
                    <ul>
                    {{ implode('', $errors->all('<li class="error">:message</li>')) }}
                    </ul>
                    </div>
                    @endif
                </div>
            </div>

            {{ Form::open(array('route' => 'admin.empaques.store', 'class' => 'form-horizontal')) }}
            <form class="contact">
                <div class="col-sm-12">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Nombres" name="nombre" value="{{ Input::old('nombre') }}">
                        <div class="error">{{ $errors->first('nombre') }}</div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-6">
                        {{--<input type="text" class="form-control" placeholder="Apellido Paterno">--}}
                        {{ Form::input('text','ape_paterno', Input::old('ape_paterno'), array('class' => 'form-control', 'placeholder' =>'Apellido Paterno')) }}
                        <div class="error">{{ $errors->first('ape_paterno') }}</div>
                    </div>
                    <div class="col-sm-6">
                        {{--<input type="text" class="form-control" placeholder="Apellido Paterno">--}}
                        {{ Form::input('text','ape_materno', Input::old('ape_materno'), array('class' => 'form-control', 'placeholder' =>'Apellido Materno')) }}
                        <div class="error">{{ $errors->first('ape_materno') }}</div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-6">
                        {{--<input type="text" class="form-control" placeholder="RUT">--}}
                        {{ Form::input('text','id_usuario', Input::old('id_usuario'), array('class' => 'form-control', 'placeholder' =>'RUN')) }}
                        <div class="error">{{ $errors->first('id_usuario') }}</div>
                    </div>
                    <div class="col-sm-6">
                        {{--<input type="email" class="form-control" placeholder="Email">--}}
                        {{ Form::input('email','email', Input::old('email'), array('class' => 'form-control', 'placeholder' =>'Email')) }}
                        <div class="error">{{ $errors->first('email') }}</div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-6">
                        {{ Form::input('date','fecha_nacimiento', Input::old('fecha_nacimiento'), array('class' => 'form-control', 'placeholder' =>'Fecha Nacimiento')) }}
{{--                        {{ Form::input('text','fecha_nacimiento', Input::old('fecha_nacimiento'), array('class' => 'form-control', 'onfocus' => "this.type='date';this.setAttribute('onfocus','');this.blur();this.focus();", 'placeholder' =>'Fecha Nacimiento')) }}--}}
                        <div class="error">{{ $errors->first('fecha_nacimiento') }}</div>
                    </div>

                    <div class="col-sm-6">
                        <label class="">Sexo</label>
                        <label class="radio-inline"><input type="radio" name="sexo" value="F">Femenino</label>
                        <label class="radio-inline"><input type="radio" name="sexo" value="M">Masculino</label>
                        <label class="radio-inline"><input type="radio" name="sexo" value="N">NN</label>
                        <div class="error">{{ $errors->first('sexo') }}</div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-6">
                        {{ Form::password('pass', array('class' => 'form-control', 'placeholder' => 'Contraseña')) }}
                        {{--<input type="password" name="pass" class="form-control" placeholder="Contraseña">--}}
                        <div class="error">{{ $errors->first('pass') }}</div>
                    </div>
                    <div class="col-sm-6">
                        {{ Form::password('password_confirmation', array('class' => 'form-control', 'placeholder' => 'Repetir Contraseña')) }}
                        <div class="error">{{ $errors->first('password_confirmation') }}</div>
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="form-group text-center">
                        <div class="checkbox">
                            <label><input type="checkbox" name="accept_terms" value="yes">Acepto los terminos y
                                condiciones.</label>
                            <div class="error">{{ $errors->first('accept_terms') }}</div>
                        </div>
                    </div>
                </div>
                {{ Form::input('hidden','bloqueado', true) }}
                {{ Form::input('hidden','frontend', true) }}
                <div class="col-sm-12">
                    <div class="form-group">
                        {{ Form::submit('Registrarce!', array('class' => 'btn btn-primary col-sm-5 pull-right')) }}
                        <a href="{{ URL::to('/') }}" class="btn btn-danger col-sm-5" style="color:white;">Cancelar</a>
                    </div>
                </div>
            {{ Form::close() }}
        </div>
        <!-- //Conatc Form Section End -->
    </div>
    <p></p>
    </div>
    <!-- //Container Section End -->
@endsection

@section('script')
@endsection