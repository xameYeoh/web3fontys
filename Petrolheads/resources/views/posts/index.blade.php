@extends('layout')

@section('title')
    Overview
@endsection

@section('content')

    <div class="title m-b-md">
        Posts
    </div>

    <div>
        @foreach($posts as $post)
            <li>{{$post->title}}</li>
            <p>{{$post->content}}</p>
        @endforeach
    </div>

@endsection