@extends('layout')

@section('title')
    Petrolheads
@endsection

@section('content')

    

    <div>
        @for($i = 0; $i <= 3); $i++) 
            <li><a href="/overview">{{$post->title}}</li>
        @endfor
    </div>
    @foreach($comments as $comment)
    @section('commentator')
        {{$comment->user_id}}
    @endsection

    @section('commentContent')
        {{$comment->content}}
    @endsection

@endforeach

@endsection