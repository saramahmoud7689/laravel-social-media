@extends('layout')

@section('content')
<div class="container mt-4">
    <a href="{{ route('posts.create') }}" class="btn btn-success mb-3">New Post</a>

    @foreach ($posts as $post)
        <div class="card mb-3">
            <div class="card-body">
                <h4>{{ $post->title }}</h4>
                <p>{{ $post->body }}</p>
                <small>v{{ $post->version }}</small><br>
                <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary btn-sm">Show</a>
                <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-success btn-sm">Edit</a>
                <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline">
                    @csrf @method('DELETE')
                    <button class="btn btn-danger btn-sm">Delete</button>
                </form>
            </div>
        </div>
    @endforeach
</div>
@endsection
