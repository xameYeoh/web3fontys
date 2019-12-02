@extends('layouts.app')

@section('title')
    Write a new post
@endsection

@section('content')
<form method="POST" action="/posts">
        {{csrf_field()}}

    <div>
        <input type="text" name="title" placeholder="Title" required value="{{old('title')}}">
    </div>
    <div>
        <input type="text" name="content" placeholder="Whats on your mind" required value="{{old('content')}}">
    </div>
    <div>
        <button type="submit">Post</button>
    </div>
</form>

@endsection