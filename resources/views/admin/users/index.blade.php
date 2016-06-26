@extends('layouts.app')

@section('ti', 'paginacion')

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
                        <a href="{!! route('admin.users.create') !!}" class="btn btn-danger btn-block"><span class="glyphicon glyphicon-piggy-bank">  nuevo usuario</a><hr>
                        @include('parche.table')

                        {!! $users->render() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection