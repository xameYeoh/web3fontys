@extends('layouts.app')

@section('title')
    Overview
@endsection

@section('content')

    <div class="title m-b-md">
        <h1>{{$post->title}}</h1>
    </div>
    <div>
        {{$post->created_at}}
    </div>
    <div>
            {{$post->content}}
    </div>

    <a href="/posts/{{$post->id}}/edit">Edit</a>

    @include('layouts.comform')
    
    @foreach($post->comments as $comment)
        <div class="media mb-4">
            <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
            <div class="media-body">
                <h5 class="mt-0">{{$comment->user_id}}</h5>
                {{$comment->content}}
            </div>
        </div>
    @endforeach

@endsection
