@extends('layout')

@section('content')
{{-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif --}}

<form method="Post" action="{{route('posts.store')}}">
    @csrf
    <!--     // ['title', 'slug', 'body', 'version', 'image']; -->
    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="text" class="form-control" name="title" 
      value="{{old('title')}}">
      @error('title')
          <div class="text-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="mb-3">
      <label class="form-label">Slug</label>
      <input type="text" class="form-control" name="slug" 
      value="{{old('slug')}}">
      @error('slug')
          <div class="text-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="mb-3">
        <label class="form-label">Body</label>
        <input type="text" class="form-control" name="body" value="{{old('body')}}">
    </div>
    <div class="mb-3">
        <label class="form-label">Image</label>
        <input type="text" class="form-control" name="image" value="{{old('image')}}">
    </div>
    <div class="mb-3">
        <label class="form-label">Version</label>
        <input type="text" class="form-control" name="version" value="{{old('version')}}">
        @error('version')
          <div class="text-danger">{{ $message }}</div>
      @enderror
    </div>
   
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
    
@endsection
