@extends('layouts.app')

@section('content')

    <a href="/playlists_laravel/public/posts" class="btn btn-default">Go back</a>
    <h1>{{$post->title}}</h1>
    <p>{{$post->body}}</p>
    <hr>
    <small>Written on: {{$post->created_at}}</small>
    <hr>
    <a href="/playlists_laravel/public/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>
@endsection