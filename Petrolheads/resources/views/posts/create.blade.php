@extends('layout')

@section('title')
    Write a new post
@endsection

@section('content')
<form method="POST" action="/posts">
        {{csrf_field()}}

    <div>
        <input type="text" name="title" placeholder="Title">
    </div>
    <div>
        <input type="text" name="content" placeholder="Whats on your mind">
    </div>
    <div>
        <button type="submit">Post</button>
    </div>
</form>

@endsection