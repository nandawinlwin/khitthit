@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row mt-2">
        @foreach($movies as $movie)
            @foreach($watchlist as $w)
                @if($movie->id == $w->movie_id & $w->user_id == Auth::user()->id)
                <div class="col-6 col-md-3 pt-2">

                    <a href="{{action('FrontendController@view',$movie->id)}}" style="text-decoration: none;color:black;">
                        <div class="card">
                            <img class="card-img-top" src="{{$movie->poster}}" alt="Card image" style="width:100%">
                            <div class="p-2">
                                <span class="pull-left">ID - {{$movie->ktid}} </span> <span class="pull-right"><i
                                        class="fa fa-star"></i> {{$movie->imdbrating}} <br></span>
                                <span class='clearfix'></span>
                                <span>Title - {{$movie->title}}</span> <br>
                                Year - {{$movie->year}} <br>
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