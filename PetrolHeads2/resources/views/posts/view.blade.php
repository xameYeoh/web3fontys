@extends('layouts.app')
<style type="text/css">
.post{
    border-radius: 10%;
    max-width: 650px;
}
</style>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        @if(session('response'))
                    <div class="alert alert-success">{{session('response')}}</div>
                @endif
            <div class="card">
                <div class="card-header">Post View</div>

                <div class="card-body">
                    <div class="col-md-4">
                    <ul class="list-group">
                    @if(count($categories) > 0)
                    @foreach($categories->all() as $category)
                        <li class="list-group-item"><a href='{{url("category/{$category->id}")}}'>{{$category-> category}}</a></li>
                    @endforeach
                    @else
                    <p>No Categories Found</p>
                    @endif
                    </ul>
                        
                        
                        
                    </div>
                    <div class="col-md-12">
                    @if(count($posts) > 0)
                    @foreach($posts->all() as $post)
                        <hr/>
                        <h4>{{$post->post_title}}</h4>
                        <img src="{{$post->post_image}}" alt="" class="post">
                        <p>{{$post->post_body}}</p>
                        <ul class="nav nav-pills">
                        <li role="presentation">
                        <a href='{{url("/like/{$post->id}")}}'>
                        <span>LIKE ({{$likeCtr}})&nbsp;</span>
                        </a>
                        </li>
                        <li role="presentation">
                        <a href='{{url("/dislike/{$post->id}")}}'>
                        <span>DISLIKE ({{$dislikeCtr}})&nbsp;</span>
                        </a>
                        </li>
                        </ul>
                    @endforeach
                    @else
                        <hr/>
                        <p>No Posts Available</p>
                    @endif

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
                        @foreach($comments->all() as $comment)
                        <hr/>
                        <p>{{$comment->comment}}</p>
                        <p>Posted By:&nbsp;{{$comment->name}}</p>

                        @endforeach
                    @else
                        <hr/>
                        <p>No Posts Available</p>
                    @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
