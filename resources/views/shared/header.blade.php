<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Larablog</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css"/>
</head>
<body>

    <header class="mb-5">
     <div class="navbar navbar-expand navbar-light bg-light">
        <h2><a class="navbar-brand" href="{{ route('home')}}">Laravel Blog</a></h2>

        <ul class="navbar-nav m1-auto">
        <li class="nav-item"><a class="nav-link" href="{{ route('home')}}">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="{{route('users.index')}}">Users</a></li>
        <li class="nav-item"><a class="nav-link" href="{{route('posts.index')}}">Blog</a></li>
        <li class="nav-item"><a class="nav-link" href="{{route('posts.create')}}">New Post</a></li>
        </ul>
     </div>
    </header>