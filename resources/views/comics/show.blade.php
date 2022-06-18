@extends('layouts.app')

@section('page-title',$comic['title'])

@section('content')

    <div class="hero-image">
        <img class="img-fluid" src="{{$comic['thumb']}}" alt="">    
    </div>

    <div class="container">
        <div class="comic">
            <p>{{$comic['title']}}</p>
            <p>{{$comic['price']}}</p>
            <p>{{$comic['description']}}</p>
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

@endsection