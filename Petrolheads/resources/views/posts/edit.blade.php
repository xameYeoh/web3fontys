@extends('layout')

@section('title')
    Edit post
@endsection

@section('content')
<form method="POST" action="/posts">
        {{csrf_field()}}

    <div>
        <input type="text" name="title" placeholder="Update title" value="{{post->title}}">
    </div>
    <div>
        <input type="text" name="content" placeholder="Update content">
    </div>
    <div>
        <button type="submit">Update</button>
    </div>
</form>

@endsection