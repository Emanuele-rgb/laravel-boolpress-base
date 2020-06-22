@extends('layouts.main')

@section('content')
    <h1>Blog archive</h1>

    @foreach ($users as $user)
        <div class="user">
            <h2>{{ $user->name }}</h2>
            <h5>{{ $user->email }}</h5>
            <img src="{{$user->info['avatar']}}" alt="">
            <div>{{$user->info['address']}}</div>
            <div>{{$user->info['phone']}}</div>

            <h3>Posts</h3>
            <ul>
                @foreach ($user->posts as $post)
                    <li>
                    <h4>{{ $post->title }}</h4>
                    <p>{{ $post->body }}</p>
                    </li>
                @endforeach
            </ul>

        </div>
        @if (! $loop->last)
            <hr>
        @endif
        
    @endforeach
@endsection