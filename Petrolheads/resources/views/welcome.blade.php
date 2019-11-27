@extends('layout')

@section('title')
    Petrolheads
@endsection

@section('content')

    

    <div>
        @foreach($posts as $post)
            <li><a href="/overview">{{$post->title}}</li>
        @endforeach
    </div>
    

@endsection