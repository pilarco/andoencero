@extends('layouts.app')

@section('ti', 'crear usuario')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">@yield('ti')</div>

                    <div class="panel-body">
                        {!! Form::open(['route' => 'apiario.apiarios.store' , 'method' => 'POST']) !!}

                        @include('parche.parcheapiario')


                        <button type="submit" class="btn btn-primary"><i class="fa fa-btn fa-sign-in"></i>Crear Apiario</button>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

