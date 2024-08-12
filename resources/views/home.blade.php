@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif 

                    {{ __('You are logged in!') }}
                    <br>
                    <br>
                    <a href="{{url('posts/create')}}" class="btn btn-primary">Create Post</a>
                    <br>
                    <br>
                    <h3>Your Posts</h3>

                    @if($posts->isNotEmpty())
                    <table class="table table-striped">
                        <tr>
                            <th>Title</th>
                            <th></th>
                            <th></th>
                        </tr>
                        @foreach($posts as $post)
                        <tr>
                            <td>{{ $post->title }}</td>
                            <td><a href="{{ url('playlists_laravel/public/posts/'.$post->id.'/edit') }}" class="btn btn-default">Edit</a></td>
                            <td>
                                <!-- Delete form can be added here if needed -->
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    @else
                        <p>You have no posts.</p>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
