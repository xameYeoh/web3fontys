@extends('layouts.app')

@section('title')
    Overview
@endsection

@section('content')

    <div class="title m-b-md">
        {{$post->title}}
    </div>
    <div>
            {{$post->content}}
    </div>
    @foreach($comments as $comment)
        @section('commentator')
            {{$comment->user_id}}
        @endsection

        @section('commentContent')
            {{$comment->content}}
        @endsection
    @endforeach
    @include('layouts.comform')

    @include('layouts.comment')

    @include('layouts.nescomment')
@endsection