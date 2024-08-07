<?php use Spatie\Html\Facades\Html; 

?>


@extends('layouts.app')

@section('content')

    <h1>Edit Post</h1>

    <form action="{{ route('posts.update',$post->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $post->title)}}" required>
        </div>

        <div class="form-group">
            <label for="body">Body</label>
            <textarea name="body" id="body" class="form-control">{{ old('body',$post->body)}}</textarea>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Update Post</button>
        </div>

    </form>


@endsection
