@extends('extends_layouts.frontend')

@section('title')

@section('content')
    <div class="row margin-top">
        <div class="col-md-8">
            <h2>{{ $post->title }}</h2>
            <p>{{ $post->body }}</p>
            <a href="{{ route('blog.index') }}" class="btn btn-default">Back to overview</a>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <p><i class="fa fa-calendar"></i>
                        Created At: {{ $post->created_at->format('d-m-Y') }}
                    </p>
                    <p>
                        <i class="fa fa-user"></i> Created By: {{ $post->user->name }}
                    </p>
                    <p>
                        <i class="fa fa-envelope"></i> User mail address:
                        <a href="mailto:{{ $post->user->email }}">{{ $post->user->email }}</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

@endsection