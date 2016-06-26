@extends('layouts.app')

@section('ti', 'vienvenido')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">@yield('ti')</div>

                    <div class="panel-body">

                        <div class="btn btn-group-justified">
                            <div class="btn">
                                <button type="button" class="btn btn-primary btn-lg" data-toggle="dropdown">
                                    Usuario <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="admin/users/create" class="btn btn-primary btn-lg">Nuevo Usuario</a></li>
                                    <li><a href="admin/users" class="btn btn-primary btn-lg">editar usario</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="btn btn-group-justified">
                            <div class="btn">
                                <button type="button" class="btn btn-primary btn-lg" data-toggle="dropdown">
                                    Apiario <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="apiario/apiarios/create" class="btn btn-primary btn-lg">Nuevo Apiario</a></li>
                                    <li><a href="#" class="btn btn-primary btn-lg">editar Apiario</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="btn-group-justified">
                            <div class="btn">
                                <button type="button" class="btn btn-primary btn-lg" data-toggle="dropdown">
                                    Colmena <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#" class="btn btn-primary btn-lg">Nueva Colmena</a></li>
                                    <li><a href="#" class="btn btn-primary btn-lg">editar Colmena</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
