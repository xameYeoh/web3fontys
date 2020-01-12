@extends('layouts.app')
<style type="text/css">
    .postPic{
        max-width: 500px;
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

    
    
    
    <form method="POST" action='{{ url("/comment/{$post->id}")}}'>
                    @csrf
                        <div class="form-group">
                        <textarea id="comment" rows="6" class="form-control" name="comment" required autofocus></textarea>
                        </div>
                        <div class="form-group">
                        <button type="submit" class="btn btn-success btn-lg btn-block">POST COMMENT</button>
                        </div>
                    </form>

                    <h3>Comments</h3>
                    
                    @if(count($comments) > 0)
                    @foreach($post->comments as $comment)
                    <hr/>
                        <p>{{$comment->content}}</p>
                        <p>Posted At:&nbsp;{{$comment->created_at}}</p>
        
                    @endforeach
                    @else
                        <hr/>
                        <p>No Comments Available</p>
                    @endif
            

        </div>
    </div>
</div>
@endsection

