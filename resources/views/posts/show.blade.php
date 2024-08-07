@extends('layouts.app')

@section('content')

    <a href="/playlists_laravel/public/posts" class="btn btn-default">Go back</a>
    <h1>{{$post->title}}</h1>
    <p>{{$post->body}}</p>
    <hr>
    <small>Written on: {{$post->created_at}}</small>
    <hr>
    <a href="/playlists_laravel/public/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>

    <form action="{{ route('posts.destroy',$post->id) }}" method="POST" class='pull-right'>
        @csrf
        @method('DELETE')

        <div class="form-group">
            <button type="submit" class="btn btn-danger">Delete Post</button>
        </div>

    </form>

   
@endsection