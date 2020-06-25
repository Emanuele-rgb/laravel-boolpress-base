@extends('layouts.main')

@section('content')
    <h1>Create new post</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('posts.store') }}" method="POST">
    @csrf
    @method('POST')

    <div class="form-group">
        <label for="title">Title</label>
    <input type="text" class="form-control" value="{{ old('title')}}" name='title' id="title">
    </div>
    <div class="form-group">
        <label for="body">Body</label>
    <textarea type="text" class="form-control" value="{{ old('body')}}" name='body' id="body"></textarea>
    </div>

    @foreach ($tags as $tag)
        <div class="form-check">
        <input class="form-check-input" type="checkbox" name="tags[]" id="tag-{{ $loop->iteration }}" value="{{ $tag->id }}">
        <label for="tag-{{ $loop->iteration }}">{{ $tag->name}}</label>
        </div>

    @endforeach

    <input class="btn btn-primary mt-4" type="submit" value="Create Post">
</form>

    
@endsection