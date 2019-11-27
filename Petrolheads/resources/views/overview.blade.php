@extends('layout')

@section('title')
    Overview
@endsection

@section('content')

    <div class="title m-b-md">
        {{$posts[$i]->title}}
    </div>

@endsection