@extends('extends_layouts.frontend')

@section('title', '| My Second Blog')

@section('content')
    <div class="row">
        <div class="col-md-8">
            @foreach($posts as $post)
                <article>
                    <h2>{{ $post->title }}</h2>
                    <p>{{ str_limit($post->body, 75) }}</p>
                    <a href="{{ route('blog.show', $post->id) }}" class="btn btn-default">Read more</a>
                    <hr>
                </article>
            @endforeach
            <div class="text-center">{{ $posts->links() }}</div>
        </div>
        <div class="col-md-4">
            @if (Auth::check())
            <a href="{{ route('admin.posts.index') }}" class="btn btn-block btn-success">To Admin</a>
            @else
                <a href="{{ route('auth.login') }}" class="btn btn-default btn-block">Login</a>
            @endif
        </div>
    </div>


@endsection
