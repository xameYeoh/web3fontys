@extends('layouts.app')

@section('title')
    Edit post
@endsection

@section('content')
<form method="POST" action="/posts/{{ $post->id }}">
    @method('PATCH')
    @csrf

    <div>
        <input type="text" name="title" placeholder="Update title" value="{{$post->title}}">
    </div>
    <div>
        <input name="content" placeholder="Update content" value="{{$post->content}}">
    </div>
    <div>
        <button type="submit">Update</button>
    </div>
</form>

<form method="POST" action="/posts/{{ $post->id }}">
    @method('DELETE')
    @csrf

    <div>
        <button type="submit">Delete</button>
    </div>
</form>
@endsection