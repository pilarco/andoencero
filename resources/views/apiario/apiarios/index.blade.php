@extends('layouts.app')

@section('ti', 'apiarios')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">@yield('ti')</div>

                    @if(Session::has('message'))
                        <p class="alert alert-success">{{ Session::get('message ') }}</p>
                    @endif

                    <div class="panel-body">
                        <a href="{!! route('apiario.apiarios.create') !!}" class="btn btn-danger btn-block"><span class="glyphicon glyphicon-piggy-bank">  Nuevo Apiario</a><hr>
                        @include('parche.tapiario')

                        {!! $apiarios->render() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection