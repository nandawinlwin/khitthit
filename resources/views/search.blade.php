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
    .col-6,.col-md-3{
        padding: 1px;
    }
</style>
<div class="container mt-4">

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

        <div id="accordianId" role="tablist" aria-multiselectable="true">

            <?php $i = 0 ?>
            <div class="row">

                @foreach($movies as $movie)

                <div class="col-6 col-lg-3 col-md-4 col-sm-6 m-0" id="mv">
                    <a href="{{action('FrontendController@view',$movie->id)}}" style="text-decoration: none;color:black;">
                        <div class="card text-white bg-dark mt-2">
                            <img class="card-img-top" src="{{$movie->poster}}" alt="" height="300px;">
                            <div class="card-body" style="height:150px;overflow: hidden;">
                                @if($movie->type == 'series')
                                @if($movie->country == 'USA')
                                <span class="pull-left">E-{{$movie->ktid}} </span> <span class="pull-right"><i class="fa fa-star"></i> {{$movie->imdbrating}} <br></span>
                                @endif
                                @else
                                <span class="pull-left">{{$movie->ktid}} </span> <span class="pull-right"><i class="fa fa-star"></i> {{$movie->imdbrating}} <br></span>
                                @endif
                                <span class='clearfix'></span>
                                <h4 class="card-title">
                                    {{mb_strimwidth($movie->title, 0, 15,'...')}}
                                </h4>
                                <p class="card-text">{{$movie->year}}</p>

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

            </div>
        </div>

    </div>
</div>

@endsection