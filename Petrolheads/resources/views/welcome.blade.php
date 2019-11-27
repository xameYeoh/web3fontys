@extends('layout')

@section('title')
    Petrolheads
@endsection

@section('content')

    

    <div>
        @foreach($posts as $post)
            <li>{{$post->title}}</li>
        @endforeach
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