@extends('layout')
{{--
@section('title')
    Comments
@endsection --}}

@section('content')
<a class="btn btn-info" href="{{route('comments.create')}}"> Create New Comment </a>
<div class="row">
    @foreach ($comments as $comment)
        <div class="col-md-4 mb-4">
            <div class="card" style="width: 100%;">
                <div class="card-body">
                    <h5 class="card-title">{{$comment->name}}</h5>
                    <p class="card-text">{{$comment->comment}}</p>
                   
                    <a class="btn btn-primary" href="{{ route('comments.show', $comment->id) }}"> Show </a>

                    <a class="btn btn-warning" href="{{route('comments.edit', $comment->id) }}"> Edit </a>

                    <form action="{{route('comments.destroy', $comment->id)}}" method='post'>
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger" type="submit"> Delete </button>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
</div>
    
@endsection