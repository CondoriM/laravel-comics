@extends('layouts.app')

@section('page-title','Single Comic')

@section('content')
<div class="hero-image">
    
</div>

    <div class="comic">
        <img class="img-fluid" src="{{$comic['thumb']}}" alt="">
        <p>{{$comic['series']}}</p>
    </div>

@endsection