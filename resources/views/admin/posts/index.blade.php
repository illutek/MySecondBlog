@extends('extends_layouts.admin')

@section('title', 'Admin Index')

@section('content')
    <h2>Admin Index</h2>

    @foreach($posts as $post)
        <div class="row">
            <div class="col-md-6">
                <h4>{{ $post->title }}</h4> -
                {{ str_limit($post->body, 40)}}
            </div>
            <div class="btngroup">
                <div class="col-md-2">
                    <a href="{{ route('admin.posts.show', $post->id) }}" class="btn btn-success btn-block">Details</a>
                </div>
                <div class="col-md-2">
                    <a href="{{ route('admin.posts.edit', $post->id) }}" class="btn btn-success btn-block">Edit</a>
                </div>
            </div>
        </div>
        <hr>
    @endforeach
    <div class="col-md-12 text-center">{!! $posts->links() !!}</div>

@endsection

