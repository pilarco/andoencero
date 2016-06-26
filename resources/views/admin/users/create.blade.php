@extends('layouts.app')

@section('ti', 'crear usuario')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">@yield('ti')</div>

                    <div class="panel-body">
                        {!! Form::open(['route' => 'admin.users.store' , 'method' => 'POST']) !!}

                        @include('parche.parchin')


                        <button type="submit" class="btn btn-primary"><i class="fa fa-btn fa-sign-in"></i>crear usuario</button>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>






@endsection