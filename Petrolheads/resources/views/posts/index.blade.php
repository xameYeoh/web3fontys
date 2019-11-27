@extends('layouts.app')

@section('title')
    Posts
@endsection

@section('content')


<div class="container">

    <div class="row">
<!-- Post Content Column -->
<div class="col-lg-8">

    <!-- Title -->
    <h1 class="mt-4">@yield('title', 'Post')</h1>


    <hr>

    <!-- Date/Time -->
    <p>@yield('time', 'Yesterday')</p>

    <hr>

    <!-- Preview Image -->
    <img class="img-fluid rounded" src="http://placehold.it/900x300" alt="">

    <hr>

    
    <blockquote class="blockquote">
        <p class="mb-0">@yield('content')</p>
        
    </blockquote>

    <hr>
    <div>
        @foreach($posts as $post)
            <li>{{$post->title}}</li>
            <p>{{$post->content}}</p>
        @endforeach
        @foreach($comments as $comment)
    @section('commentator')
        {{$comment->user_id}}
    @endsection

    @section('commentContent')
        {{$comment->content}}
    @endsection

@endforeach
    </div>
    @include('layouts.comform')

    @include('layouts.comment')

    @include('layouts.nescomment')

</div>


       

    </div>
    <!-- /.row -->

</div>
@endsection


