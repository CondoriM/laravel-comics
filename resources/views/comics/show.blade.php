@extends('layouts.app')

@section('page-title',$comic['title'])

@section('content')

<div class="single-comic">
    <div class="hero-image">
        <div class="container">
            <img class="img-fluid thumb" src="{{$comic['thumb']}}" alt=""> 
        </div>   
    </div>

    <div class="container py-5">
        <div class="comic">
            <div class="row">
                <div class="col-8">
                    <h1 class="text-uppercase">{{$comic['title']}}</h1>
                    <p>{{$comic['price']}}</p>
                    <p>{{$comic['description']}}</p>
                </div>

                <div class="col-4 text-end">
                    <h4 class="black-50 text-uppercase">Adevertisement</h4>
                    <img class="img-fluid" src="{{asset('img/adv.jpg')}}" alt="">
                </div>
                
            </div>
        </div>
    </div>

    <section class="comic-details bg-light">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2>Talent</h2>
                    <p>Art by:
                        @forelse($comic['artists'] as $artist)
                            {{$artist}}@if(!$loop->last),@endif
                        @empty
                            N/A
                        @endforelse
                    </p>

                    <p>Writter by:
                        @forelse($comic['writers'] as $writer)
                            {{$writer}}@if(!$loop->last),@endif
                        @empty
                            N/A
                        @endforelse
                    </p>
                </div>

                <div class="col">
                    <h2>Spect</h2>

                    <p>
                        Series:{{$comic['series']}}
                    </p>
                    <p>U.S Price: {{$comic['price']}}</p>
                    <p>On Sale Date: {{DateTime::createFromFormat('Y-m-d',$comic['sale_date'])->format('M d Y')}}</p>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection