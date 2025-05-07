@extends('layout')


@section('content')
<div class="row">
        <div class="col-md-4 mb-4">
            <div class="card" style="width: 100%;">
      
                <div class="card-body">
                    <h5 class="card-title">{{$comment->name}}</h5>
                    <p class="card-text">{{$comment->comment}}</p>
                    <p class="card-text">{{$comment->updated_at}}</p>
                    <p class="card-text">{{$comment->created_at}}</p>
                    <ul> 
                        {{-- @forelse ($comment->posts as $post)
                            <li>{{ $post->name }}</li>
                        @empty
                            <p class="text-danger">No Posts</p>
                        @endforelse --}}

                        {{-- Related Posts: 
                        @foreach ($comment->posts as $post)
                            <li> {{$post->name}} </li>
                        @endforeach --}}

                    </ul>
                </div>
            </div>
        </div>
</div>
@endsection
