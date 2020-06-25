@extends('layouts.main')

@section('content')
    @if (session('post-deleted'))
        <div class="alert alert-success">
            <p>The following post has been successfully deleted: {{ session('post-deleted')}}</p>
            
        </div>
    @endif

    <h1>Blog Archive</h1>

    @foreach ($posts as $post)
        <article>
        <h2>{{ $post->title }}</h2>
        <h4>{{ $post->user->name }}</h4>
        <h4>Created at: {{ $post->created_at }}, last modified at: {{ $post->updated_at }} </h4>
        <p>{{ $post->body }}</p>
        <a href="{{ route('posts.show', $post->slug) }}">Read more</a>
        </article>
        @if (!$loop->last)
            <hr>
        @endif
    @endforeach

    <div class="wrap-pagination mt-5 d-flex justify-content-end">
        {{ $posts->links()}}
    </div>
    
@endsection