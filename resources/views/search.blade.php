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
<div class="container mt-4">
<br>
    <input id="myInput" class="form-control mb-3" type="text" placeholder="Search..">

    <script>
        $(document).ready(function() {
            $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myDIV #mv").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>
    <div id="myDIV">

    <table class="table table-hover table-dark table-sm">
        <thead>
            <tr>
                <th>KT ID</th>
                <th>Title</th>
                <th>Year</th>
                <th>Country</th>
                <th>Actors</th>
                <th>Genre</th>
                <th>Director</th>
                <th>More</th>
            </tr>
            </thead>
            <tbody>
                @foreach($movies as $movie)
                <tr id="mv">
                    <td scope="row">{{$movie->ktid}}</td>
                    <td>{{$movie->title}}</td>
                    <td>{{$movie->year}}</td>
                    <td>{{$movie->country}}</td>
                    <td>{{$movie->actors}}</td>
                    <td>{{$movie->genre}}</td>
                    <td>{{$movie->director}}</td>
                    <td>
                        <a href="{{action('FrontendController@view',$movie->id)}}" class="btn btn-sm btn-primary">View</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
    </table>

        <div id="accordianId" role="tablist" aria-multiselectable="true">

            <?php $i = 0 ?>
            <!-- div class="row">

                @foreach($movies as $movie)

                <div class="col-4 col-lg-2 col-md-3 col-sm-4 m-0" id="mv">
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

                                <span class="collapse in">
                                    {{$movie->title}}
                                    {{$movie->ktid}}
                                    {{$movie->title}}
                                    {{$movie->year}}
                                    {{$movie->country}}
                                    {{$movie->runtime}}
                                    {{$movie->imdbrating }}
                                    {{$movie->actors}}
                                    {{$movie->genre}}
                                    {{$movie->director}}
                                </span>

                                @if($movie->type == 'series')
                                <span class="float-right">{{$movie->type}}</span>
                                @endif
                            </div>
                        </div>
                    </a>
                </div>


                @endforeach

            </div -->
        </div>

    </div>
</div>

@endsection