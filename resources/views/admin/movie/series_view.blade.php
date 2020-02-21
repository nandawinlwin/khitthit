@extends('admin.layout.app')
@section('title','View Movie')
@section('content')

<div class="container mt-2">
    <div class="card">
        <div class="card-header">
            <h3 class="float-left">{{$series->title}}</h3>
            <a href="{{action('Admin\AdminController@series_edit',$series->id)}}" class="btn btn-primary btn-sm float-right">Edit</a>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-3">
                    <img src="{{$series->poster}}"
                        class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}"
                        alt="">
                </div>

                <div class="col-3">
                    ID - {{$series->ktid}}
                    <hr>
                    Name - {{$series->title}}
                    <hr>
                    Year - {{$series->year}}
                    <hr>
                    Country - {{$series->country}}
                    <hr>
                    Runtime - {{$series->runtime}}
                    <hr>
                    Rating - {{$series->rating }}
                    <hr>
                </div>

                <div class="col-6">
                    Genre - {{$series->genre}}
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
                        $string = str_replace("&nbsp;", "", $series->plot);
                        $string = str_replace("<p>", "", $string);
                        $string = str_replace("</p>", "", $string);

                        ?>
                        <p>{{$string}}</p>
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