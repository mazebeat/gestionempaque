<ul class="list-inline">
    <li>
        <ul class="list-inline icon-position">
            <li>
                <a href="mailto:"><i class="livicon" data-name="mail" data-size="18" data-loop="true" data-c="#fff"
                                     data-hc="#fff"></i></a>
                <label class="hidden-xs"><a href="mailto:" class="text-white">contacto@gestionempaques.cl</a></label>
            </li>
            <li>
                <a href="tel:"><i class="livicon" data-name="phone" data-size="18" data-loop="true" data-c="#fff"
                                  data-hc="#fff"></i></a>
                <label class="hidden-xs"><a href="tel:" class="text-white">+56 (2) 2 555 555</a></label>
            </li>
            @if(Sentry::check())
                <li>
                    <label class="hidden-xs text-white">{{ Sentry::getUser()->first_name }} {{ Sentry::getUser()->last_name }}
                        <a href="{{ url('logout') }}" class="btn-link text-white"><i class="fa fa-hand-spock-o"
                                                                                     aria-hidden="true"></i> LogOut!</a></label>
                </li>
            @endif
        </ul>
    </li>
    {{--<li>--}}
    {{--<a href="#"> <i class="livicon" data-name="facebook" data-size="18" data-loop="true" data-c="#fff" data-hc="#757b87"></i> </a>--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<a href="#"> <i class="livicon" data-name="twitter" data-size="18" data-loop="true" data-c="#fff" data-hc="#757b87"></i> </a>--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<a href="#"> <i class="livicon" data-name="google-plus" data-size="18" data-loop="true" data-c="#fff" data-hc="#757b87"></i> </a>--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<a href="#"> <i class="livicon" data-name="linkedin" data-size="18" data-loop="true" data-c="#fff" data-hc="#757b87"></i> </a>--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<a href="#"> <i class="livicon" data-name="rss" data-size="18" data-loop="true" data-c="#fff" data-hc="#757b87"></i> </a>--}}
    {{--</li>--}}
    <li class="pull-right">
        <ul class="list-inline">
            <li>
                <a href="{{ url('') }}"><img src="{{ asset('frontend/images/logo.png') }}" class="logo_position"
                                             style="width: 145px;"/></a>
            </li>
            <li>

            </li>
            @if(Sentry::check())
                <li>
                    <label class="hidden-xs text-white">{{ Sentry::getUser()->first_name }} {{ Sentry::getUser()->last_name }}
                        <a href="{{ url('logout') }}" class="btn-link text-white"><i class="fa fa-hand-spock-o"
                                                                                     aria-hidden="true"></i> LogOut!</a></label>
                </li>
            @endif
        </ul>
    </li>
</ul>