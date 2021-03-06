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
