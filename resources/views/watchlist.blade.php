@extends('layouts.app')
@section('content')
<style>
  .aspect-16to9 {
    height: auto;
    width: 100%;
  }

  .p-16to9 {
    position: relative;
    padding-bottom: 56%;
    overflow: hidden;
  }

  .card-body-content {
    position: absolute;
    top: 1rem;
    bottom: 1rem;
    right: 1rem;
    left: 1rem;
    overflow: hidden;
  }

  .col-6,
  .col-md-3 {
    padding: 1px;
  }
</style>
<div class="container">
    <div class="row mt-2">
        @foreach($movies as $movie)
        @foreach($watchlist as $w)
        @if($movie->id == $w->movie_id & $w->user_id == Auth::user()->id)
        <div class="col-4 col-lg-2 col-md-3 col-sm-4 m-0">
            <a href="{{action('FrontendController@view',$movie->id)}}" style="text-decoration: none;color:black;">
                <div class="card text-white bg-dark mt-2">
                    <img class="card-img-top" src="{{$movie->poster}}" alt="" height="200px;">
                    <div class="card-body" style="height:80px;overflow: hidden; padding:2px;">
                        @if($movie->type == 'series')
                        @if($movie->country == 'USA')
                        <span class="pull-left">E-{{$movie->ktid}} </span> <span class="pull-right"><i class="fa fa-star"></i> {{$movie->imdbrating}} <br></span>
                        @endif
                        @else
                        <span class="pull-left" style="font-size: 12px;">{{$movie->ktid}} </span> <span class="pull-right" style="font-size: 12px;"><i class="fa fa-star"></i> {{$movie->imdbrating}} <br></span>
                        @endif
                        <span class='clearfix'></span>
                        <p class="card-title" style="font-size: 15px;">
                            {{mb_strimwidth($movie->title, 0, 15,'...')}}
                        </p>
                        <p class="card-text" style="font-size: 12px;">{{$movie->year}}</p>

                        @if($movie->type == 'series')
                        <span class="float-right">{{$movie->type}}</span>
                        @endif
                    </div>
                </div>
            </a>
        </div>
        @endif
        @endforeach
        @endforeach
    </div>
</div>
@endsection