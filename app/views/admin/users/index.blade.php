@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
    Lista Usuarios
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/dataTables.colReorder.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/dataTables.scroller.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/dataTables.bootstrap.css') }}"/>
    <link href="{{ asset('assets/css/pages/tables.css') }}" rel="stylesheet" type="text/css">
@stop

{{-- Page content --}}
@section('content')
    <section class="content-header">
        <h1>Usuarios</h1>
        <ol class="breadcrumb">
            <li>
                <a href="index"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                    Dashboard
                </a>
            </li>
            <li>Usuarios</li>
            <li class="active">Usuarios</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content paddingleft_right15">
        <div class="row">
            <div class="panel panel-primary ">
                <div class="panel-heading">
                    <h4 class="panel-title"><i class="livicon" data-name="user" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                        Lista Usuarios
                    </h4>
                </div>
                <br/>

                <div class="panel-body">
                    <table class="table table-hover table-condensed table-striped table-responsive" id="table1">
                        <thead>
                        <tr class="filters">
                            <th>ID</th>
                            <th>Nombres</th>
                            <th>Apellidos</th>
                            <th>E-mail</th>
                            <th>Estado</th>
                            {{--<th>Created At</th>--}}
                            <th>Acciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{{ $user->id }}}</td>
                                <td>{{{ $user->first_name }}}</td>
                                <td>{{{ $user->last_name }}}</td>
                                <td>{{{ $user->email }}}</td>
                                <td>
                                    @if($user->isActivated())
                                        Activated
                                    @else
                                        Pending
                                    @endif
                                </td>
                                {{--<td>{{{ $user->created_at->diffForHumans() }}}</td>--}}
                                <td>
                                    <a href="{{ route('users.show', $user->id) }}"><i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view user"></i></a>

                                    <a href="{{ route('users.update', $user->id) }}"><i class="livicon" data-name="edit" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="update user"></i></a>

                                    {{--@if ((Sentry::getUser()->id != $user->id) && ($user->id != 1))	--}}
                                    <a href="{{ route('confirm-delete/user', $user->id) }}" data-toggle="modal" data-target="#delete_confirm"><i class="livicon" data-name="user-remove" data-size="18" data-loop="true" data-c="#f56954"
                                                                                                                                                 data-hc="#f56954" title="delete user"></i></a>
                                    {{--@endif--}}


                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>    <!-- row-->
    </section>
@stop

{{-- page level scripts --}}
@section('footer_scripts')
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/dataTables.bootstrap.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/datatables.js') }}"></script>

    <div class="modal fade" id="delete_confirm" tabindex="-1" role="dialog" aria-labelledby="user_delete_confirm_title" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content"></div>
        </div>
    </div>
    <script>
        $(function () {
            $('body').on('hidden.bs.modal', '.modal', function () {
                $(this).removeData('bs.modal');
            });
        });
    </script>
@stop