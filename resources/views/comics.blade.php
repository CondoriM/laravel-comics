@extends('layouts.app')

@section('page-title','comics page')

@section('content')
<div class="hero-image">
    
</div>

<div class="comics">
    <div class="container">
        <h1>Current Series</h1>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-6">
            @forelse($comics as $comic)
            <div class="col">
                <div class="comic">
                    <img class="img-fluid" src="{{$comic['thumb']}}" alt="">
                    <p>{{$comic['series']}}</p>
                </div>
            </div>
            @empty
            <div class="col">No results to show</div>
            @endforelse
        </div>
    </div>

    <div class="text-center">
        <a class="btn btn-primary text-uppercase" href="#">Load mode</a>    
    </div>
</div>

<div class="banner bg-primary py-5">
    <div class="conatainer">
        <div class="row">
            <div class="col">
                <img src="{{asset('img/buy-comics-digital-comics.png')}}" alt="">
                <span>Digital comics</span>
            </div>

            <div class="col">
                <img src="{{asset('img/buy-comics-digital-comics.png')}}" alt="">
                <span>Digital comics</span>
            </div>

            <div class="col">
                <img src="{{asset('img/buy-comics-digital-comics.png')}}" alt="">
                <span>Digital comics</span>
            </div>

            <div class="col">
                <img src="{{asset('img/buy-comics-digital-comics.png')}}" alt="">
                <span>Digital comics</span>
            </div>

            <div class="col">
                <img src="{{asset('img/buy-comics-digital-comics.png')}}" alt="">
                <span>Digital comics</span>
            </div>
        </div>
    </div>
</div>
@endsection