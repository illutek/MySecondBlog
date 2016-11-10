@extends('extends_layouts.admin')

@section('title', '| Login Form')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h2>Please Login</h2>
            {!! Form::open(['route' => 'auth.login']) !!}
            <div class="from-group margin-top">
                {{ Form::label('email', 'Your email: ') }}
                {{ Form::email('email', null, ['class' => 'form-control']) }}
            </div>
            <div class="from-group margin-top">
                {{ Form::label('password', 'Your Password: ') }}
                {{ Form::password('password', ['class' => 'form-control']) }}
            </div>
            <div class="form-group margin-top">
                {{ Form::submit('Login', ['class' => 'btn btn-primary']) }}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection