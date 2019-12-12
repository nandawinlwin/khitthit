@extends('admin.layout.app')
@section('title','View Movie')
@section('content')

<div class="container mt-2">
    <div class="card">
        <div class="card-header">
            <h3 class="float-left">{{$movie->title}}</h3>
            <a href="{{action('Admin\AdminController@movie_edit',$movie->id)}}" class="btn btn-primary btn-sm float-right">Edit</a>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-3">
                    <img src="{{$movie->poster}}"
                        class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}"
                        alt="">
                </div>

                <div class="col-3">
                    ID - {{$movie->ktid}}
                    <hr>
                    Name - {{$movie->title}}
                    <hr>
                    Year - {{$movie->year}}
                    <hr>
                    Country - {{$movie->country}}
                    <hr>
                    Runtime - {{$movie->runtime}}
                    <hr>
                    Rating - {{$movie->imdbrating }}
                    <hr>
                </div>

                <div class="col-6">
                    Actors - {{$movie->actors}}
                    <hr>
                    Genre - {{$movie->genre}}
                    <hr>
                    Director - {{$movie->director}}
                    <hr>
                    <div class="card mt-3">
                        <div class="card-body">
                            AD
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="card mt-3">
                        <div class="card-body">
                            <h4>Plot</h4>
                            
                        <?php  
                        $string = str_replace("&nbsp;", "", $movie->plot);
                        $string = str_replace("<p>", "", $string);
                        $string = str_replace("</p>", "", $string);

                        ?>
                        <p style="">{{$string}}</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="card-footer text-muted">
        </div>
    </div>
</div>

@endsection