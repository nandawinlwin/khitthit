@extends('admin.layout.app')
@section('content')


<div class="container">
    <div class="card mt-3">
        <div class="card-header">
            <h3>MMSUB Chinese Series</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-6">
                    <img src="{{$series->poster}}" style="width:400px;" class="img-fluid" alt="">
                </div>
                <div class="col-6">
                    <h3>Number -
                        @if($series->series_group == 1 )
                        E-
                        @elseif($series->series_group == 2)
                        K-
                        @elseif($series->series_group == 3)
                        C-
                        @else
                        -
                        @endif
                        {{$series->ktid}}</h3><br>

                    <h3>Name - {{$series->title}}</h3><br>
                    <h3>Country - {{$series->country}}</h3><br>
                    <h3>Epsodes - </h3><br>
                    <h3>Duration - {{$series->runtime}}</h3><br>
                    <h3>Ratings - {{$series->imdbrating}}</h3><br>
                    <h3>Memory - </h3><br>
                    <h3>Prize - </h3><br>
                </div>
            </div>
            <hr>
            <?php  
                        $string = str_replace("<p>", "", $series->plot);
                        $string = str_replace("</p>", "", $string);

                        ?>

            <div class="card">
                <div class="card-body" style="height:600px;">
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp{{$series->plot}}

                    
                </div>
            </div>

        </div>
        <div class="card-footer text-muted">
        </div>
    </div>
</div>

<script>
@endsection