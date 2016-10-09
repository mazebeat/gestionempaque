@extends('frontend.layouts.user')

{{-- page level styles --}}
@section('style')
    <!--page level css -->
    <link rel="stylesheet" media="screen" href="{{ asset('assets/vendors/bootstrap-wysihtml5-rails-b3/vendor/assets/stylesheets/bootstrap-wysihtml5/core-b3.css') }}"/>
    <link href="{{ asset('assets/css/pages/mail_box.css') }}" rel="stylesheet" type="text/css"/>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @if(Session::has('message'))
                <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    Oh snap! {{ Session::get('message') }}.
                </div>
            @endif

            @if ($errors->any() && !Config::get('app.debug'))
                <div class="alert alert-danger">
                    <ul>
                        {{ implode('', $errors->all('<li class="error">:message</li>')) }}
                    </ul>
                </div>
            @endif
        </div>
    </div>

    <div class="row web-mail">
        <div class="col-xs-12">
            {{ Form::open(array('url' => 'directmessage', 'method' => 'POST', 'class' => 'form')) }}
            <table class="table table-striped table-advance">
                <thead>
                <tr>
                    <td>
                        <h4><strong>Mensaje Directo</strong></h4>
                    </td>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>
                        <div class="compose row">
                            <label class="col-xs-2 hidden-xs" for="to">Para:</label>
                            {{ Form::email('to', Input::old('to', $to), array('id' => 'to', 'class' => 'col-xs-9', 'tabindex' => 1, 'required', 'readonly')) }}
                            {{--<input type="text" class="col-xs-9" id="to" placeholder="Para" tabindex="1" required>--}}

                            {{--<div class="clearfix"></div>--}}
                            <label class="col-xs-2 hidden-xs" for="to">Asunto:</label>
                            {{ Form::text('subject', Input::old('subject'), array('id' => 'subject', 'class' => 'col-xs-9', 'tabindex' => 1, 'required')) }}

                            {{--<div class="clearfix"></div>--}}
                            <div class="col-xs-12 box-body pad">
                                {{ Form::textarea('message', Input::old('message'), array('class' => 'textarea','size' => '30x5', 'placeholder' => 'Escribe tú mensaje aquí', 'style' => 'width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;')) }}
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        {{--<button type="submit" class="btn btn-primary btn-block">--}}
                        {{--<span class="livicon" data-n="external-link" data-s="12" data-c="white" data-hc="white"></span>--}}
                        {{--Enviar--}}
                        {{--</button>--}}
                        {{ Form::submit('Enviar', array('class' => 'btn btn-primary btn-block')) }}
                        {{--<a href="mail_box" class="btn btn-primary btn-block"><span class="livicon" data-n="external-link" data-s="12" data-c="white" data-hc="white"></span>Enviar</a>--}}
                    </td>
                    <td class="view-message text-right">&nbsp;</td>
                </tr>
                </tbody>
            </table>
            {{ Form::close() }}
        </div>
    </div>
@endsection

@section('script')
    <!-- begining of page level js -->
    <script type="text/javascript" src="{{ asset('assets/vendors/bootstrap-wysihtml5-rails-b3/vendor/assets/javascripts/bootstrap-wysihtml5/wysihtml5.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/bootstrap-wysihtml5-rails-b3/vendor/assets/javascripts/bootstrap-wysihtml5/core-b3.js') }}"></script>
    <script type="text/javascript">
        $(function () {
            //bootstrap WYSIHTML5 - text editor
            $(".textarea").wysihtml5();
        });
    </script>
@endsection