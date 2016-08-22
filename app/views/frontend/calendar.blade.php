@extends('frontend.layouts.user')

@section('style')
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/takeTurn.min.css') }}"/>
@endsection

@section('content')
    <section class="row">
        {{--<h2 class="title text-center">{{  date_format(Carbon::now(), 'F Y ') }}[<span id="time"></span>][<span id="time2"></span>]</h2>--}}
        <div class="col-xs-12">
            <strong class="pull-right">Hora: <span class="time"></span> <i class="fa fa-clock-o"></i></strong>
        </div>

        <div class="col-xs-12" style="margin-bottom: 20px;">
            <form action="saveTurns" id="frmCalendar" method="POST">
                <div class="calendar" data-toggle="calendar">
                    <div class="row">
                        @foreach($days as $day)
                            <div class="col-xs-12 day text-center">
                                <h3>{{ $day }}</h3>
                            </div>
                        @endforeach
                    </div>
                    @foreach($turns as $turn)
                        <div class="row">
                            @for ($i = 0; $i < 7; $i++)
                                <div class="col-xs-12 calendar-day">
                                    <div class="text-center vertical">
                                        <span>{{ $turn }}</span></br>
                                        <button type="button" class="btn btn-block btn-primary taketurn"
                                                data-id="{{ $turn }}" data-total="{{ $i }}" data-left="{{ $i }}"
                                                data-take="false">
                                            Tomar
                                            <small class="count">()</small>

                                        </button>
                                    </div>
                                    <time datetime=""></time>
                                </div>
                            @endfor
                        </div>
                    @endforeach
                </div>
            </form>
            <p>Siga las instrucciones...*</p>
        </div>
    </section>
@endsection

@section('script')
    <script type="text/javascript" src="{{ asset('frontend/js/takeTurn.min.js') }}"></script>
@endsection
