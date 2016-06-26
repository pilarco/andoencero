@extends('layouts.app')

@section('ti', 'editar usuario  ' . $user->nombre )

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">@yield('ti')</div>

                    <div class="panel-body">
                        {!! Form::model($user , ['route' => ['admin.users.update' , $user] , 'method' => 'PUT']) !!}

                        @include('parche.parchin')

                        <button type="submit" class="btn btn-primary"><i class="fa fa-btn fa-sign-in"></i>actulisar usuario</button>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection