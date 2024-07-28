<?php use Spatie\Html\Facades\Html; 

?>


@extends('layouts.app')

@section('content')

    <h1>Create Post</h1>

    {{html()->form('POST', route('posts.store'))->open() }}

    {{html()->label('Title','title')}}
    {{ html()->text('title')->class('form-control')->placeholder('Enter title') }}

    {{html()->label('Body','body')}}
    {{html()->textarea('body')->class('form-control')->placeholder('Enter body')}}

    {{html()->submit('Submit')->class('btn btn-primary')}}
    {{html()->closeModelForm()}}
  

@endsection
