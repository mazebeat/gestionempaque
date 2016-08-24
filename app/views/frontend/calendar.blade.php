@extends('frontend.layouts.user')

@section('style')
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/takeTurn.min.css') }}"/>
@endsection

@section('content')
    <section class="row">
        <div class="col-xs-12">
            <strong class="pull-right">Hora: <span class="time"></span> <i class="fa fa-clock-o"></i></strong>
        </div>

        <div class="col-xs-12" style="margin-bottom: 20px;">
            @if(isset($active) && $active)
                <div class="calendar" data-toggle="calendar">
                    <div class="row">
                        @foreach($days as $day)
                            <div class="col-xs-12 day text-center">
                                <h3>{{ $day }}</h3>
                            </div>
                        @endforeach
                    </div>
                    {{ HTML::calendar($turns) }}
                </div>
                </br>
                <p>Siga las instrucciones... *</p>
            @endif
        </div>
    </section>
@endsection

@section('script')
    <script type="text/javascript" src="{{ asset('frontend/js/takeTurn.js') }}"></script>
@endsection
