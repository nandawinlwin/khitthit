@extends('admin.layout.app')
@section('title','Setting')
@section('content')
<div class="container">
    <div class="row mt-2">
    @foreach($movies as $movie)
        <div class="col-2">
            
            <a href="{{ action('Admin\AdminController@movie_view',$movie->id) }}">
                <div class="card">
                    <img class="card-img-top" src="{{$movie->poster}}" alt="Card image" style="width:100%">
                    <div class="p-2">
                        {{$movie->ktid}} <br>
                        {{$movie->title}}
                    </div>
                </div>
            </a>
         
        </div>
        @endforeach
    </div>
</div>
@endsection