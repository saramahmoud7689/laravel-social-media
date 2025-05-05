@extends('layout')

@section('content')


<form method="Post" action="{{route('posts.update', $post->id)}}">
    @csrf
    @method('PUT')
    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="text" class="form-control" name="title" 
      value="{{$post->title}}">
      @error('title')
          <div class="text-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="mb-3">
      <label class="form-label">Slug</label>
      <input type="text" class="form-control" name="slug" 
      value="{{$post->slug}}">
      @error('slug')
          <div class="text-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="mb-3">
        <label class="form-label">Body</label>
        <input type="text" class="form-control" name="body" value="{{$post->body}}">
    </div>
    <div class="mb-3">
        <label class="form-label">Image</label>
        <input type="text" class="form-control" name="image" value="{{$post->image}}">
    </div>
    <div class="mb-3">
        <label class="form-label">Version</label>
        <input type="text" class="form-control" name="version" value="{{$post->version}}">
        @error('version')
          <div class="text-danger">{{ $message }}</div>
      @enderror
    </div>
   
    <button type="submit" class="btn btn-success">Update</button>
  </form>
    
@endsection