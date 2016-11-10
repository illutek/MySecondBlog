@extends('extends_layouts.admin')

@section('title', '| Edit Post')

@section('content')
    <div class="col-md-12">
        {!! Form::model($post, ['route' => ['admin.posts.update', $post->id], 'method' => 'PUT']) !!}
        @include('admin.posts.form', ['textBtn' => 'Edit Post'])
        {!! Form::close() !!}
    </div>

@endsection