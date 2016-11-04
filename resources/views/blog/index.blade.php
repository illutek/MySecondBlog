@extends('extends_layouts.frontend')

@section('title', '| My Second Blog')

@section('content')
    @foreach($posts as $post)
        <article>
            <h2>{{ $post->title }}</h2>
            <p>{{ str_limit($post->body, 75) }}</p>
            <a href="{{ route('blog.show', $post->id) }}" class="btn btn-default">Read more</a>
            <hr>
        </article>
    @endforeach
    <div class="text-center">{{ $posts->links() }}</div>
@endsection