@extends('admin.layout.app')
@section('title','Setting')
@section('content')
<div class="container">
    
    <div class="clearfix"></div>
    <div class="card mt-2">
        <div class="card-header">
            New Movie
        </div>
        <div class="card-body">
            <form action="{{action('Admin\AdminController@series_update',$series->id)}}" method="post">
                @csrf
                <div class="row">

                    <div class="col-12">
                        <div class="form-group">
                            <label for="">Title</label>
                            <input type="text" name="title" id="myInput" id="" class="form-control" value="{{$series->title}}">
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-group">
                            <label for="">KT ID</label>
                            <input type="text" name="ktid" id="myInput" id="" class="form-control" value="{{$series->ktid}}">
                        </div>
                    </div>

                    <div class="col-3">
                        <div class="form-group">
                            <label for="">Type</label>
                            <?php $coun = array("English","Korea","China","Thilian"); $i=0;?>
                            <select class="form-control" name="country" id="">
                                @for($i=0 ; $i < 4 ; $i++ )
                                    @if($series->country == $coun[$i])
                                    <option value="{{$coun[$i]}}" selected>{{$coun[$i]}}</option>
                                    @else
                                    <option value="{{$coun[$i]}}">{{$coun[$i]}}</option>
                                    @endif
                                @endfor
                            </select>
                            
                        </div>
                    </div>

                    <div class="col-3">
                        <div class="form-group">
                            <label for="">Year</label>
                            <input type="text" name="year" id="myInput" id="" class="form-control" value="{{$series->year}}">
                        </div>
                    </div>

                    <div class="col-3">
                        <div class="form-group">
                            <label for="">Season</label>
                            <input type="text" name="season" id="myInput" id="" class="form-control" value="{{$series->season}}">
                        </div>

                    </div>


                    <div class="col-3">
                        <div class="form-group">
                            <label for="">Episode</label>
                            <input type="text" name="episode" id="" class="form-control" value="{{$series->episode}}">
                        </div>
                    </div>

                    <div class="col-3">
                        <div class="form-group">
                            <label for="">Size</label>
                            <input type="text" name="size" id="myInput" id="" class="form-control" value="{{$series->size}}">
                        </div>
                    </div>

                    <div class="col-3">
                        <div class="form-group">
                            <label for="">Time</label>
                            <input type="text" name="time" id="myInput" id="" class="form-control" value="{{$series->runtime}}">
                        </div>
                    </div>

                    <div class="col-3">
                        <div class="form-group">
                            <label for="">Rating</label>
                            <input type="text" name="rating" id="myInput" id="" class="form-control" value="{{$series->rating}}">
                        </div>
                    </div>

                    <div class="col-3">
                        <div class="form-group">
                            <label for="">Genre</label>
                            <input type="text" name="genre" id="myInput" id="" class="form-control" value="{{$series->genre}}">
                        </div>
                    </div>

                    

                    <div class="col-12">
                        <div class="form-group">
                            <label for="">Poster Link</label>
                            <input type="text" name="poster" id="myInput" id="" class="form-control" value="{{$series->poster}}">
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group">
                            <label for="">Plot</label>
                            <textarea name="plot" id="" class="form-control" cols="30" rows="10">{{$series->plot}}</textarea>
                        </div>
                    </div>

                    <div class="col-3">
                        <div class="form-group">
                            <label for="">.</label>
                            <input type="submit" class="btn form-control btn-primary float-right" value="Update">
                        </div>

                    </div>

                </div>


            </form>
        </div>
        <div class="card-footer text-muted">

        </div>
    </div>

</div>
@endsection