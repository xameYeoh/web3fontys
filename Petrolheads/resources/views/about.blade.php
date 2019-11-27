@extends('layouts.app')

@section('title')
    About us
@endsection

@section('content')
<div class="container">

    <div class="row">
<!-- Post Content Column -->
<div class="col-lg-8">

    <!-- Title -->
    <h1 class="mt-4">@yield('title', 'Post')</h1>


    <hr>

    <!-- Date/Time -->
    <p>@yield('time', 'Yesterday')</p>

    <hr>

    
    <div>
    <li>Martin Grigorov</li>
    <li>Kirill Getmanskii</li>
    <li>Dimitar Ivanov</li>
    </div>

@endsection





