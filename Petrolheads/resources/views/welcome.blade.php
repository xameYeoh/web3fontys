@extends('layout')

@section('title')
    Petrolheads
@endsection

@section('content')

    

    <div>
        @for($i = 0; $i <= 3; $i++) 
            <li><a href="/overview">{{$posts[$i]->title}}</li>
        @endfor
    </div>
@endsection