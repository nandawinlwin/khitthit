@extends('layouts.app')
@section('content')
<div class="container">

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

            <?php $i=0 ?>
            <div class="row">
                @foreach($movies as $movie)
                <div class="col-6 col-md-3 pt-2" id="mv">
                    <a href="{{action('FrontendController@view',$movie->id)}}"
                        style="text-decoration: none;color:black;">
                        <div class="card">
                            <img class="card-img-top" src="{{$movie->poster}}" alt="Card image" style="width:100%">
                            <div class="p-2">
                                <span class="pull-left">{{$movie->ktid}} </span> <span class="pull-right"><i
                                        class="fa fa-star"></i> {{$movie->imdbrating}} <br></span>
                                <span class='clearfix'></span>
                                <span>{{$movie->title}}</span> <br>
                                {{$movie->year}} <br>
                            </div>
                        </div>
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
                    </a>

                    

                </div>
                @endforeach
            </div>
        </div>

    </div>
</div>

@endsection