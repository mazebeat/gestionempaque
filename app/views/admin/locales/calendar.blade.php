<div class="col-xs-12" style="margin-bottom: 20px;">
    <form action="saveTurns" id="frmCalendar" method="POST">
        <div class="calendar" data-toggle="calendar">
            <div class="row">
                @foreach($days as $day)
                    <div class="col-xs-12 day text-center">
                        <h4>{{ $day }}</h4>
                    </div>
                @endforeach
            </div>
            @foreach($turns as $turn)
                <div class="row">
                    @for ($i = 0; $i < 7; $i++)
                        <div class="col-xs-12 calendar-day">
                            <div class="text-center vertical">
                                <small>{{ $turn }}</small></br>
                                <button type="button" class="btn btn-xs btn-block btn-info taketurn" data-id="{{ $turn }}" data-total="{{ $i }}" data-left="{{ $i }}" data-take="false">
                                    {{ $text }}
                                </button>
                            </div>
                        </div>
                    @endfor
                </div>
            @endforeach
        </div>
    </form>
</div>