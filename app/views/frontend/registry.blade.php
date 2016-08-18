@extends('frontend.layouts.default')

@section('style')
@endsection

@section('content')
        <!-- Container Section Start -->
<div class="container">
    <div class="row">
        <!-- Contact form Section Start -->
        <h2>Formulario de Registro</h2>

        <form class="contact">
            <div class="col-sm-12">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Nombres">
                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Apellidos">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="RUT">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Email">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <input type="date" class="form-control" placeholder="Fecha Nacimiento">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label class="">Sexo</label>
                    <label class="radio-inline"><input type="radio" name="sexo">Femenino</label>
                    <label class="radio-inline"><input type="radio" name="sexo">Masculino</label>
                </div>
            </div>
            <div class="col-sm-6">
                <input type="password" class="form-control" placeholder="Contraseña">
            </div>
            <div class="col-sm-6">
                <input type="password" class="form-control" placeholder="Repetir Contraseña">
            </div>

            <div class="col-sm-12">
                <div class="form-group text-center">
                    <div class="checkbox">
                        <label><input type="checkbox" value="">Acepto los terminos y condiciones.</label>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group">
                    <button class="btn btn-primary col-sm-5 pull-right">Registrarce!</button>
                    <button class="btn btn-danger col-sm-5">Cancelar</button>
                </div>
            </div>
    </div>
    </form>
    <!-- //Conatc Form Section End -->
</div>
<p></p>
</div>
<!-- //Container Section End -->
@endsection

@section('script')
@endsection