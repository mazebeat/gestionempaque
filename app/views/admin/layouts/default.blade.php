<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>
        @section('title')
            - Administrador
        @show
    </title>
{{--<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>--}}
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <!-- global css -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    {{--<link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>--}}
    <!-- font Awesome -->
    <link href="{{ asset('assets/vendors/font-awesome-4.2.0/css/font-awesome.min.css') }}" rel="stylesheet"
          type="text/css"/>
    <link href="{{ asset('assets/css/styles/black.css') }}" rel="stylesheet" type="text/css" id="colorscheme"/>
    <link rel="stylesheet" href="{{ asset('assets/css/panel.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/metisMenu.css') }}"/>

    <!-- end of global css -->
    <!--page level css-->
@yield('header_styles')
<!--end of page level css-->
</head>

<body class="skin-josh">
<header class="header">
    <a href="{{ URL::to('admin/index') }}" class="logo">
        <img src="{{ asset('assets/img/logo-white.png') }}" alt="logo" style="width: 150px">
    </a>
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <div class="hidden">
            <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                <div class="responsive_nav"></div>
            </a>
        </div>
        <div class="navbar-right">
            <ul class="nav navbar-nav">
                {{--<li class="dropdown messages-menu">--}}
                {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="livicon" data-name="message-flag" data-loop="true" data-color="#42aaca" data-hovercolor="#42aaca" data-size="28"></i>--}}
                {{--<span class="label label-success">4</span>--}}
                {{--</a>--}}
                {{--<ul class="dropdown-menu dropdown-messages pull-right">--}}
                {{--<li class="dropdown-title">4 New Messages</li>--}}
                {{--<li class="unread message">--}}
                {{--<a href="javascript:;" class="message"> <i class="pull-right" data-toggle="tooltip" data-placement="top" title="Mark as Read"><span class="pull-right ol livicon" data-n="adjust" data-s="10" data-c="#287b0b"></span></i> --}}
                {{--<img data-src="holder.js/45x45/#000:#fff" class="img-responsive message-image" alt="icon">--}}
                {{--<div class="message-body">--}}
                {{--<strong>Riot Zeast</strong>--}}
                {{--<br>Hello, You there?--}}
                {{--<br>--}}
                {{--<small>8 minutes ago</small>--}}
                {{--</div>--}}
                {{--</a>--}}
                {{--</li>--}}
                {{--<li class="unread message">--}}
                {{--<a href="javascript:;" class="message">--}}
                {{--<i class="pull-right" data-toggle="tooltip" data-placement="top" title="Mark as Read"><span class="pull-right ol livicon" data-n="adjust" data-s="10" data-c="#287b0b"></span></i> --}}
                {{--<img data-src="holder.js/45x45/#000:#fff" class="img-responsive message-image" alt="icon">--}}
                {{--<div class="message-body">--}}
                {{--<strong>John Kerry</strong>--}}
                {{--<br>Can we Meet ?--}}
                {{--<br>--}}
                {{--<small>45 minutes ago</small>--}}
                {{--</div>--}}
                {{--</a>--}}
                {{--</li>--}}
                {{--<li class="unread message">--}}
                {{--<a href="javascript:;" class="message">--}}
                {{--<i class="pull-right" data-toggle="tooltip" data-placement="top" title="Mark as Read">--}}
                {{--<span class="pull-right ol livicon" data-n="adjust" data-s="10" data-c="#287b0b"></span>--}}
                {{--</i>--}}
                {{--<img data-src="holder.js/45x45/#000:#fff" class="img-responsive message-image" alt="icon">--}}
                {{--<div class="message-body">--}}
                {{--<strong>Jenny Kerry</strong>--}}
                {{--<br>Dont forgot to call...--}}
                {{--<br>--}}
                {{--<small>An hour ago</small>--}}
                {{--</div>--}}
                {{--</a>--}}
                {{--</li>--}}
                {{--<li class="unread message">--}}
                {{--<a href="javascript:;" class="message">--}}
                {{--<i class="pull-right" data-toggle="tooltip" data-placement="top" title="Mark as Read">--}}
                {{--<span class="pull-right ol livicon" data-n="adjust" data-s="10" data-c="#287b0b"></span>--}}
                {{--</i>--}}
                {{--<img data-src="holder.js/45x45/#000:#fff" class="img-responsive message-image" alt="icon">--}}
                {{--<div class="message-body">--}}
                {{--<strong>Ronny</strong>--}}
                {{--<br>Hey! sup Dude?--}}
                {{--<br>--}}
                {{--<small>3 Hours ago</small>--}}
                {{--</div>--}}
                {{--</a>--}}
                {{--</li>--}}
                {{--<li class="footer">--}}
                {{--<a href="#">View all</a>--}}
                {{--</li>--}}
                {{--</ul>--}}
                {{--</li>--}}
                {{--<li class="dropdown notifications-menu">--}}
                {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown">--}}
                {{--<i class="livicon" data-name="bell" data-loop="true" data-color="#e9573f" data-hovercolor="#e9573f" data-size="28"></i>--}}
                {{--<span class="label label-warning">7</span>--}}
                {{--</a>--}}
                {{--<ul class=" notifications dropdown-menu">--}}
                {{--<li class="dropdown-title">You have 7 notifications</li>--}}
                {{--<li>--}}
                {{--<!-- inner menu: contains the actual data -->--}}
                {{--<ul class="menu">--}}
                {{--<li>--}}
                {{--<i class="livicon danger" data-n="timer" data-s="20" data-c="white" data-hc="white"></i>--}}
                {{--<a href="#">after a long time</a>--}}
                {{--<small class="pull-right">--}}
                {{--<span class="livicon paddingright_10" data-n="timer" data-s="10"></span>--}}
                {{--Just Now--}}
                {{--</small>--}}
                {{--</li>--}}
                {{--<li>--}}
                {{--<i class="livicon success" data-n="gift" data-s="20" data-c="white" data-hc="white"></i>--}}
                {{--<a href="#">Jef's Birthday today</a>--}}
                {{--<small class="pull-right">--}}
                {{--<span class="livicon paddingright_10" data-n="timer" data-s="10"></span>--}}
                {{--Few seconds ago--}}
                {{--</small>--}}
                {{--</li>--}}
                {{--<li>--}}
                {{--<i class="livicon warning" data-n="dashboard" data-s="20" data-c="white" data-hc="white"></i>--}}
                {{--<a href="#">out of space</a>--}}
                {{--<small class="pull-right">--}}
                {{--<span class="livicon paddingright_10" data-n="timer" data-s="10"></span>--}}
                {{--8 minutes ago--}}
                {{--</small>--}}
                {{--</li>--}}
                {{--<li>--}}
                {{--<i class="livicon bg-aqua" data-n="hand-right" data-s="20" data-c="white" data-hc="white"></i>--}}
                {{--<a href="#">New friend request</a>--}}
                {{--<small class="pull-right">--}}
                {{--<span class="livicon paddingright_10" data-n="timer" data-s="10"></span>--}}
                {{--An hour ago--}}
                {{--</small>--}}
                {{--</li>--}}
                {{--<li>--}}
                {{--<i class="livicon danger" data-n="shopping-cart-in" data-s="20" data-c="white" data-hc="white"></i>--}}
                {{--<a href="#">On sale 2 products</a>--}}
                {{--<small class="pull-right">--}}
                {{--<span class="livicon paddingright_10" data-n="timer" data-s="10"></span>--}}
                {{--3 Hours ago--}}
                {{--</small>--}}
                {{--</li>--}}
                {{--<li>--}}
                {{--<i class="livicon success" data-n="image" data-s="20" data-c="white" data-hc="white"></i>--}}
                {{--<a href="#">Lee Shared your photo</a>--}}
                {{--<small class="pull-right">--}}
                {{--<span class="livicon paddingright_10" data-n="timer" data-s="10"></span>--}}
                {{--Yesterday--}}
                {{--</small>--}}
                {{--</li>--}}
                {{--<li>--}}
                {{--<i class="livicon warning" data-n="thumbs-up" data-s="20" data-c="white" data-hc="white"></i>--}}
                {{--<a href="#">David liked your photo</a>--}}
                {{--<small class="pull-right">--}}
                {{--<span class="livicon paddingright_10" data-n="timer" data-s="10"></span>--}}
                {{--2 July 2014--}}
                {{--</small>--}}
                {{--</li>--}}
                {{--</ul>--}}
                {{--</li>--}}
                {{--<li class="footer">--}}
                {{--<a href="#">View all</a>--}}
                {{--</li>--}}
                {{--</ul>--}}
                {{--</li>--}}
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img data-src="holder.js/35x35/#fff:#000" width="35" class="img-circle img-responsive pull-left"
                             height="35" alt="riot">

                        <div class="riot">
                            <div>
                                {{--                                    {{ Sentry::getUser()->first_name }} {{ Sentry::getUser()->last_name }}--}}
                                Demo
                                    <span>
                                        <i class="caret"></i>
                                    </span>
                            </div>
                        </div>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header bg-light-blue">
                            <img data-src="holder.js/90x90/#fff:#000" class="img-responsive img-circle"
                                 alt="User Image">
                            {{--                                <p class="topprofiletext">{{ Sentry::getUser()->first_name }} {{ Sentry::getUser()->last_name }}</p>--}}
                            <p class="topprofiletext">Demo</p>
                        </li>
                        <!-- Menu Body -->
                        <li>
                            <a href="#">
                                <i class="livicon" data-name="user" data-s="18"></i>
                                Perfil
                            </a>
                        </li>
                        <li role="presentation"></li>
                        <li>
                            <a href="#">
                                <i class="livicon" data-name="gears" data-s="18"></i>
                                Ajustes
                            </a>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="{{ URL::to('admin/lockscreen') }}">
                                    <i class="livicon" data-name="lock" data-s="18"></i>
                                    Bloquear
                                </a>
                            </div>
                            <div class="pull-right">
                                <a href="{{ URL::to('admin/logout') }}">
                                    <i class="livicon" data-name="sign-out" data-s="18"></i>
                                    Salir
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
<div class="wrapper row-offcanvas row-offcanvas-left">
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="left-side sidebar-offcanvas">
        <section class="sidebar purplebg">
            <div class="page-sidebar  sidebar-nav">
                <div class="nav_icons">
                    <ul class="sidebar_threeicons">
                        <li>
                            <a href="{{ URL::to('admin/form_builder') }}">
                                <i class="livicon" data-name="hammer" title="Form Builder 1" data-loop="true"
                                   data-color="#42aaca" data-hc="#42aaca" data-s="25"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{ URL::to('admin/form_builder2') }}">
                                <i class="livicon" data-name="list-ul" title="Form Builder 2" data-loop="true"
                                   data-color="#e9573f" data-hc="#e9573f" data-s="25"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{ URL::to('admin/buttonbuilder') }}">
                                <i class="livicon" data-name="vector-square" title="Button Builder" data-loop="true"
                                   data-color="#f6bb42" data-hc="#f6bb42" data-s="25"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{ URL::to('admin/gridmanager') }}">
                                <i class="livicon" data-name="new-window" title="Form Builder 1" data-loop="true"
                                   data-color="#37bc9b" data-hc="#37bc9b" data-s="25"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"></div>
                <!-- BEGIN SIDEBAR MENU -->
            @include('admin.layouts.modules.menu')
            <!-- END SIDEBAR MENU -->
            </div>
        </section>
    </aside>
    <aside class="right-side">

        <!-- Notifications -->
    @include('notifications')

    <!-- Content -->
        @yield('content')
    </aside>
    <!-- right-side -->
</div>
<a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Return to top"
   data-toggle="tooltip" data-placement="left">
    <i class="livicon" data-name="plane-up" data-size="18" data-loop="true" data-c="#fff" data-hc="white"></i>
</a>
<!-- global js -->
<script src="{{ asset('assets/js/jquery-1.11.1.min.js') }}" type="text/javascript"></script>
@if (Request::is('admin/form_builder2') || Request::is('admin/gridmanager') || Request::is('admin/portlet_draggable'))
    <script src="{{ asset('assets/vendors/form_builder1/js/jquery.ui.min.js') }}"></script>
@endif
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
{{--<script src="{{ asset('assets/js/bootstrap.min.js') }}" type="text/javascript"></script>--}}
<!--livicons-->
<script src="{{ asset('assets/vendors/livicons/minified/raphael-min.js') }}"></script>
<script src="{{ asset('assets/vendors/livicons/minified/livicons-1.4.min.js') }}"></script>
<script src="{{ asset('assets/js/josh.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/metisMenu.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/vendors/holder-master/holder.js') }}"></script>
<!-- end of global js -->
<!-- begin page level js -->
@yield('footer_scripts')
<!-- end page level js -->
</body>
</html>