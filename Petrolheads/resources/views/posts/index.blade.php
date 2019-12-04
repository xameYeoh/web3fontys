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
            
                                    
                                
                                          

            <!-- Preview Image -->
            

            <hr>

            
            <blockquote class="blockquote">
                <p class="mb-0">@yield('content')</p>
                
            </blockquote>
            <a class="nav-link" href="{{ url('/posts/create') }}">{{ __('Create Post') }}</a>
            <hr>
            <div>
                @foreach($posts as $post)
                    <li><a href="/posts/{{$post->id}}">{{$post->title}}</li>
                @endforeach
            </div>
            

        </div>
    </div>
</div>

@endsection


