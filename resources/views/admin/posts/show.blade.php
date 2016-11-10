@extends('extends_layouts.admin')

@section('title', '| More')

@section('content')
    <div class="row">
        <div class="col-md-8">
            <h2>{{ $post->title }}</h2>
            <p>{{ $post->body }}</p>
            <hr>
        </div>
        <div class="col-md-4">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    Extra Info
                </div>
                <div class="panel-body">
                    Created At: {{ $post->created_at->format('Y-m-d') }}<br>
                    Updated At: {{ $post->updated_at->format('Y-m-d') }}
                </div>

            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-md-4">
            <a href="{{ route('admin.posts.index') }}" class="btn btn-success btn-block">Back to overview</a>
        </div>
        <div class="col-md-4">
            <a href="{{ route('admin.posts.edit', $post->id) }}" class="btn btn-success btn-block">Edit</a>
        </div>
        <div class="col-md-4">
            {!! Form::open([
            'route' => ['admin.posts.destroy', $post->id],
            'method' =>'delete',
            'class' => 'destroy'
            ]) !!}
            {!! Form::submit('Delete Post', ['class' => 'btn btn-danger btn-block']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@endsection