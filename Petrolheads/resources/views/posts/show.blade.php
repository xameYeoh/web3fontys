@extends('layouts.app')
<style type="text/css">
    .postPic{
        max-width: 100%;
        height: auto;
    }
</style>
@section('title')
    Overview
@endsection

@section('content')
<div class="container">

    <div class="row">
<!-- Post Content Column -->
        <div class="col-lg-8">
        <div class="title m-b-md">
        <h1>{{$post->title}}</h1>
    </div>
    <div>
        {{$post->created_at}}
    </div>
    <div class="col-md-12">
        <img src="{{$post->post_image}}" alt="" class="postPic">
    </div>
    <div>
            {{$post->content}}
    </div>

    @can('update', $post)
        <a href="/posts/{{$post->id}}/edit">Edit</a>
    @endcan    

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
            
            

        </div>
    </div>
</div>
@endsection

