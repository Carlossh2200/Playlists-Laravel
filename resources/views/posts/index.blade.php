@extends('layouts.app')

@section('content')

<h1>Post Page</h1>

    @if(count($posts) > 1)
    <div class="card">
        <ul class="list-group list-group-flush">
        @foreach($posts as $post)
                    <li class="list-group-item">
                        <h3>Title--> <a href="/playlists_laravel/public/posts/{{$post->id}}">{{$post->title}} <br> Content--> {{$post->body}}</a></h3>
                        <small>Written on {{$post->created_at}} </small>
                    </li>
                
        @endforeach
        </ul>
    </div>
    @endif

@endsection