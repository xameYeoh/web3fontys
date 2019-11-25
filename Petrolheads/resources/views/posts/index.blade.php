@extends('layout')

@section('title')
    Overview
@endsection

@section('content')



    <div>
        @foreach($posts as $post)
            <li>{{$post->title}}</li>
            <p>{{$post->content}}</p>
        @endforeach
    </div>

@endsection

@foreach($comments as $comment)
    @section('commentator')
        {{$comment->user_id}}
    @endsection

    @section('commentContent')
        {{$comment->content}}
    @endsection

@endforeach
