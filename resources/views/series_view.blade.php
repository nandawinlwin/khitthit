@extends('layouts.app')
@section('content')

<div class="container">
    <br>
    <div class="d-none d-sm-block ">
    <div class="card" style="background-color: #636363;color:white">
        <div class="card-header bg-dark" style="color:white">
            <h3 class="pull-left"> {{$movie->title}} </h3>
            <span>
                @if($yes == 1 )
                <span class="pull-right">
                    <a href="{{action('HomeController@removewatchlist',$movie->id)}}"><i class="fa fa-trash"
                            style="font-size:40px"></i></a>
                </span>
                @else
                <span class="pull-right">
                    <a href="{{action('HomeController@addwatchlist',$movie->id)}}"><i class="fa fa-bookmark"
                            style="font-size:40px"></i></a>
                </span>
                @endif
            </span>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-12 col-md-3 pt-2">
                    <img src="{{$movie->poster}}"
                        class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}"
                        alt="">
                </div>

                <div class="col-12 col-md-3 pt-3">
                    <h4>ID - {{$movie->ktid}}</h4>
                    <hr>
                    Name - {{$movie->title}}
                    <hr>
                    Year - {{$movie->year}}
                    <hr>
                    Country - {{$movie->country}}
                    <hr>
                    Runtime - {{$movie->runtime}}
                    <hr>
                    Rating - {{$movie->rating }}
                    <hr>
                </div>

                <div class="col-12 col-md-6">
                    Genre - {{$movie->genre}}
                    <hr>
                    <div class="card mt-3">
                        <div class="card-body" style="background-color: #636363;color:white">
                            AD
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="card mt-3">
                        <div class="card-body" style="background-color: #636363;color:white">
                            <h4>Plot</h4>
                            &nbsp&nbsp&nbsp&nbsp&nbsp{{$movie->plot}}
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="card-footer text-muted bg-dark">
        </div>
    </div>
    </div>

    <div class="d-block d-sm-none">
    <h3 style="color:white;">{{$movie->title}}</h3>
    <img src="{{$movie->poster}}" class="img-fluid" alt="" style="width:100%;">
    <br>
    <span class="pt-5">
                @if($yes == 1 )
                <span class="pull-right">
                    <a href="{{action('HomeController@removewatchlist',$movie->id)}}"><i class="fa fa-trash"
                            style="font-size:40px"></i></a>
                </span>
                @else
                <span class="pull-right">
                    <a href="{{action('HomeController@addwatchlist',$movie->id)}}"><i class="fa fa-bookmark"
                            style="font-size:40px"></i></a>
                </span>
                @endif
            </span>

<div class="clearfix"></div>
            <div style="color:white;">
            <h4 >ID - {{$movie->ktid}}</h4>
                    <hr>
                    Name - {{$movie->title}}
                    <hr>
                    Year - {{$movie->year}}
                    <hr>
                    Country - {{$movie->country}}
                    <hr>
                    Runtime - {{$movie->runtime}}
                    <hr>
                    Rating - {{$movie->rating }}
                    <hr>
                    Genre - {{$movie->genre}}
                    <hr>
                   <h4>Plot</h4>
                    &nbsp&nbsp&nbsp&nbsp&nbsp{{$movie->plot}}
                        
                    
            </div>
    </div>

    
</div>

@endsection