@extends('layout')

@section('title')
    Petrolheads
@endsection

@section('content')

    <div class="title m-b-md">
        Home
    </div>

    <div>
        @foreach($posts as $post)
            <li>{{$post->title}}</li>
        @endforeach
    </div>

@endsection