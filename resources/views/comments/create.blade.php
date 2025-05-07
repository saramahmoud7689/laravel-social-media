@extends('layout')

@section('content')


<form method="Post" action="{{route('comments.store')}}">
    @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Name</label>
      <input type="text" class="form-control" name="name">
      @error('name')
          <div class="text-danger">{{ $message }}</div>
      @enderror
    </div>
    
    <div class="mb-3">
        <label class="form-label">Comment</label>
        <input type="text" class="form-control" name="comment">
        @error('comment')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

   
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
    
@endsection