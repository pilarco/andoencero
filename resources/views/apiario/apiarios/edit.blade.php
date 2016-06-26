@extends('layouts.app')

@section('ti', 'editar apiario')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">@yield('ti')</div>

                    <div class="panel-body">
                        {!! Form::model($apiario , ['route' => ['apiario.apiarios.update' , $apiario] , 'method' => 'PUT']) !!}

                        @include('parche.parcheapiario')

                        <button type="submit" class="btn btn-primary"><i class="fa fa-btn fa-sign-in"></i>actulisar apiario</button>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection