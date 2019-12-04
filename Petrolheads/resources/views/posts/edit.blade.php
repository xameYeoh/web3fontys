@extends('layouts.app')

@section('title')
    Edit post
@endsection

@section('content')
<div class="container" >
        <div class="row">
            <div class="col-md-8 col-md-offset-2">

                <div class="panel panel-default">
                    <div class="panel-heading"> Edit Post </div>

                    <div class="panel-body">
                    <form method="POST" action="/posts/{{ $post->id }}">
    @method('PATCH')
    @csrf

    <div>
        <input type="text" name="title" placeholder="Update title" value="{{$post->title}}" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" >
    </div>
    <div>
        <input name="content" placeholder="Update content" value="{{$post->content}}" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" >
    </div>
    <div>
        <button type="submit" class="btn btn-primary btn-lg">Update</button>
    </div>
</form>

<form method="POST" action="/posts/{{ $post->id }}">
    @method('DELETE')
    @csrf

    <div>
        <button type="submit" class="btn btn-primary btn-lg">Delete</button>
    </div>
</form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
