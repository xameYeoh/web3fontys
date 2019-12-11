@extends('layouts.app')

@section('title')
    Write a new post
@endsection

@section('content')
<div class="container" >
        <div class="row">
            <div class="col-md-8 col-md-offset-2">

                <div class="panel panel-default">
                    <div class="panel-heading"> Create Post </div>

                    <div class="panel-body">
                    <form method="POST" action="/posts"enctype="multipart/form-data">
                        {{csrf_field()}}

                        <div>
                            <input type="text" name="title" placeholder="Title" required value="{{old('title')}}" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" >
                        </div>
                        <div>
                            <input type="text" name="content" placeholder="Whats on your mind" required value="{{old('content')}}" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" >
                        </div>
                        <div class="form-group row">
                            <label for="post_image" class="col-md-4 col-form-label text-md-right">{{ __('Featured Image') }}</label>

                            <div class="col-md-6">
                                <input id="post_image" type="file" class="form-control{{ $errors->has('post_image') ? ' is-invalid' : '' }}" name="post_image" required>

                                @if ($errors->has('post_image'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('post_image') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary btn-lg">Post</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
