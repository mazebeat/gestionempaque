<ul id="menu" class="page-sidebar-menu">
    <li {{ (Request::is('admin') ? 'class="active"' : '') }}>
        <a href="{{ route('dashboard') }}">
            <i class="livicon" data-name="home" data-size="18" data-c="#418BCA" data-hc="#418BCA" data-loop="true"></i>
            <span class="title">Inicio</span>
        </a>
    </li>
<!--<li {{ (Request::is('admin/perfilesmayores') ? 'class="active"' : '') }}>
        <a href="{{ url('admin/perfilesmayores') }}">
            <i class="livicon" data-name="laptop" data-size="18" data-c="#418BCA" data-hc="#418BCA" data-loop="true"></i>
            <span class="title">Perfiles Mayores</span>
        </a>
    </li>-->

    <li {{ (Request::is('admin/empaques') ? 'class="active"' : '') }}>
        <a href="{{ url('admin/empaques') }}">
            <i class="livicon" data-name="sitemap" data-size="18" data-c="#418BCA" data-hc="#418BCA"
               data-loop="true"></i>
            <span class="title">Empaques</span>
        </a>
    </li>
    <li {{ (Request::is('admin/reportes') ? 'class="active"' : '') }}>
        <a href="{{ url('admin/reportes') }}">
            <i class="livicon" data-name="piechart" data-size="18" data-c="#418BCA" data-hc="#418BCA"
               data-loop="true"></i>
            <span class="title">Reportes</span>
        </a>
    </li>
    <li {{ (Request::is('admin/casaestudios') ? 'class="active" id="active"' : '') }}>
        <a href="{{ URL::to('admin/casaestudios') }}">
            <i class="livicon" data-name="house" data-size="18" data-c="#418BCA" data-hc="#418BCA" data-loop="true"></i>
            Casas de Estudio
        </a>
    </li>


    <li>
        <a href="#">
            <i class="livicon" data-name="maps" data-size="18" data-c="#6CC66C" data-hc="#6CC66C" data-loop="true"></i>
            <span class="title">Locales</span>
            <span class="fa arrow"></span>
        </a>
        <ul class="sub-menu">
            <li {{ (Request::is('admin/locales') ? 'class="active"' : '') }}>
                <a href="{{ url('admin/locales') }}">
                    <i class="livicon" data-name="location" data-size="18" data-c="#418BCA" data-hc="#418BCA"
                       data-loop="true"></i>
                    <span class="title">Local</span>
                </a>
            </li>
            <li {{ (Request::is('admin/normas2') ? 'class="active"' : '') }}>
                <a href="{{ url('admin/normas2') }}">
                    <i class="livicon" data-name="page" data-size="18" data-c="#418BCA" data-hc="#418BCA"
                       data-loop="true"></i>
                    <span class="title">Normas</span>
                </a>
            </li>
            <li {{ (Request::is('admin/turnos') ? 'class="active"' : '') }}>
                <a href="{{ url('admin/turnos') }}">
                    <i class="livicon" data-name="turn" data-size="18" data-c="#418BCA" data-hc="#418BCA"
                       data-loop="true"></i>
                    <span class="title">Planilla</span>
                </a>
            </li>
        </ul>
    </li>


    <li>
        <a href="#">
            <i class="livicon" data-name="maps" data-size="18" data-c="#6CC66C" data-hc="#6CC66C" data-loop="true"></i>
            <span class="title">Localización</span>
            <span class="fa arrow"></span>
        </a>
        <ul class="sub-menu">
            <li>
                <a href="{{ URL::to('admin/provincia') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Provincia
                </a>
            </li>
            <li>
                <a href="{{ URL::to('admin/comunas') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Comunas
                </a>
            </li>
            <li>
                <a href="{{ URL::to('admin/regions') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Regiones
                </a>
            </li>
        </ul>
    </li>

    <li {{ (Request::is('admin/users') || Request::is('admin/users/create') || Request::is('admin/users/*') || Request::is('admin/deleted_users') ? 'class="active"' : '') }}>
        <a href="#">
            <i class="livicon" data-name="user" data-size="18" data-c="#6CC66C" data-hc="#6CC66C" data-loop="true"></i>
            <span class="title">Administración</span>
            <span class="fa arrow"></span>
        </a>
        <ul class="sub-menu">
        <!--<li {{ ((Request::is('admin/users/*')) && !(Request::is('admin/users/create')) ? 'class="active" id="active"' : '') }}>
                {{--<a href="{{ URL::route('users.show', 1) }}">--}}
                <a href="#">
                    <i class="fa fa-angle-double-right"></i>
                    Ver Perfil
                </a>
            </li>-->
            <li {{ (Request::is('admin/users') ? 'class="active" id="active"' : '') }}>
                <a href="{{ URL::to('admin/users') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Usuarios
                </a>
            </li>
            <li {{ (Request::is('admin/accesos') ? 'class="active" id="active"' : '') }}>
                <a href="{{ URL::to('admin/accesos') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Accesos
                </a>
            </li>
            <li {{ (Request::is('admin/permisos') ? 'class="active" id="active"' : '') }}>
                <a href="{{ URL::to('admin/permisos') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Permisos
                </a>
            </li>
            <li {{ (Request::is('admin/perfils') ? 'class="active" id="active"' : '') }}>
                <a href="{{ URL::to('admin/perfils') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Perfiles
                </a>
            </li>

        </ul>
    </li>

    {{--<li {{ (Request::is('admin/groups') || Request::is('admin/groups/create') || Request::is('admin/groups/*') ? 'class="active"' : '') }}>--}}
    {{--<a href="#">--}}
    {{--<i class="livicon" data-name="users" data-size="18" data-c="#418BCA" data-hc="#418BCA" data-loop="true"></i>--}}
    {{--<span class="title">Grupos</span>--}}
    {{--<span class="fa arrow"></span>--}}
    {{--</a>--}}
    {{--<ul class="sub-menu">--}}
    {{--<li {{ (Request::is('admin/groups') ? 'class="active" id="active"' : '') }}>--}}
    {{--<a href="{{ URL::to('admin/groups') }}">--}}
    {{--<i class="fa fa-angle-double-right"></i>--}}
    {{--Grupos--}}
    {{--</a>--}}
    {{--</li>--}}
    {{--<li {{ (Request::is('admin/groups/create') ? 'class="active" id="active"' : '') }}>--}}
    {{--<a href="{{ URL::to('admin/groups/create') }}">--}}
    {{--<i class="fa fa-angle-double-right"></i>--}}
    {{--Agregar Grupo--}}
    {{--</a>--}}
    {{--</li>--}}
    {{--<li {{ (Request::is('admin/groups/any_user') ? 'class="active" id="active"' : '') }}>--}}
    {{--<a href="{{ URL::to('admin/groups/any_user') }}">--}}
    {{--<i class="fa fa-angle-double-right"></i>--}}
    {{--Accesos Usuario--}}
    {{--</a>--}}
    {{--</li>--}}
    {{--@if (Sentry::getUser()->hasAccess('admin'))--}}
    {{--@if (Sentry::getUser()->hasAccess('admin'))--}}
    {{--<li {{ (Request::is('admin/groups/admin_only') ? 'class="active" id="active"' : '') }}>--}}
    {{--<a href="{{ URL::to('admin/groups/admin_only') }}">--}}
    {{--<i class="fa fa-angle-double-right"></i>--}}
    {{--Acceso Administrador--}}
    {{--</a>--}}
    {{--</li>--}}
    {{--@endif--}}
    {{--</ul>--}}
    {{--</li>--}}
</ul>