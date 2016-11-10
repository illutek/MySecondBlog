@extends('extends_layouts.admin')

@section('title', '| Create a new post')

@section('content')

    {!! Form::open(['route' => 'admin.posts.store']) !!}
    @include('admin.posts.form', ['textBtn' => 'Create Post'])
    {!! Form::close() !!}

@endsection