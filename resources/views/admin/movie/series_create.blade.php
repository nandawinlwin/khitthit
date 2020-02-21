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
            <form action="{{action('Admin\AdminController@series_create_save')}}" method="post">
                @csrf
                <div class="row">

                    <div class="col-12">
                        <div class="form-group">
                            <label for="">Title</label>
                            <input type="text" name="title" id="myInput" id="" class="form-control" placeholder="Title">
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-group">
                            <label for="">KT ID</label>
                            <input type="text" name="ktid" id="myInput" id="" class="form-control" placeholder="kt id">
                        </div>
                    </div>

                    <div class="col-3">
                        <div class="form-group">
                            <label for="">Type</label>
                            <select class="form-control" name="country" id="">
                                <option value="English">English</option>
                                <option value="Korea">Korea</option>
                                <option value="China">China</option>
                                <option value="Thailian">Thailian</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-group">
                            <label for="">Year</label>
                            <input type="text" name="year" id="myInput" id="" class="form-control" placeholder="Year">
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-group">
                            <label for="">Season</label>
                            <input type="text" name="season" id="myInput" id="" class="form-control" placeholder="0,0,0,0,0">
                        </div>

                    </div>


                    <div class="col-3">
                        <div class="form-group">
                            <label for="">Episode</label>
                            <input type="text" name="episode" id="" class="form-control" placeholder="0,0,0,0,0">
                        </div>
                    </div>

                    <div class="col-3">
                        <div class="form-group">
                            <label for="">Size</label>
                            <input type="text" name="size" id="myInput" id="" class="form-control" placeholder="Size">
                        </div>
                    </div>

                    <div class="col-3">
                        <div class="form-group">
                            <label for="">Time</label>
                            <input type="text" name="time" id="myInput" id="" class="form-control" placeholder="00:00:00">
                        </div>
                    </div>

                    <div class="col-3">
                        <div class="form-group">
                            <label for="">Rating</label>
                            <input type="text" name="rating" id="myInput" id="" class="form-control" placeholder="Rating">
                        </div>
                    </div>

                    <div class="col-3">
                        <div class="form-group">
                            <label for="">Genre</label>
                            <input type="text" name="genre" id="myInput" id="" class="form-control" placeholder="Genre">
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group">
                            <label for="">Poster Link</label>
                            <input type="text" name="poster" id="myInput" id="" class="form-control" placeholder="Poster Link">
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group">
                            <label for="">Plot</label>
                            <textarea name="plot" id="" class="form-control" cols="30" rows="10"></textarea>
                        </div>
                    </div>

                    <div class="col-3">
                        <div class="form-group">
                            <label for="">.</label>
                            <input type="submit" class="btn form-control btn-primary float-right" value="Input">
                        </div>

                    </div>

                </div>


            </form>
        </div>
        <div class="card-footer text-muted">

        </div>
    </div>


    <div class="card mt-2">
        <div class="card-header">
            Header
        </div>
        <div class="card-body">
            <input id="myInput2" class="form-control mb-3" type="text" placeholder="Search..">

            <script>
                $(document).ready(function() {
                    $("#myInput").on("keyup", function() {
                        var value = $(this).val().toLowerCase();
                        $("#myDIV tr").filter(function() {
                            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                        });
                    });

                    $("#myInput2").on("keyup", function() {
                        var value = $(this).val().toLowerCase();
                        $("#myDIV tr").filter(function() {
                            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                        });
                    });
                });
            </script>
            <table class="table table-striped table-bordered table-sm">
                <thead>
                    <tr>
                        <th>KT ID</th>
                        <th>Name</th>
                        <th>Country</th>
                        <th>Year</th>
                        <th>Season</th>
                        <th>Episode</th>
                        <th>Size</th>
                        <th>Runtime</th>
                        <th>Genre</th>
                        <th>More</th>
                    </tr>
                </thead>
                <tbody id="myDIV">
                    @foreach($series as $serie)
                    <tr>
                        <td scope="row">{{$serie->ktid}}</td>
                        <td>{{$serie->title}}</td>
                        <td>{{$serie->country}}</td>
                        <td>{{$serie->year}}</td>
                        <td>{{$serie->season}}</td>
                        <td>{{$serie->episode}}</td>
                        <td>{{$serie->size}}</td>
                        <td>{{$serie->runtime}}</td>
                        <td>{{$serie->genre}}</td>
                        <td>
                            <a href="" class="text-primary"><i class="far fa-eye"></i></a>

                            <a href="" class="text-danger"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer text-muted">
            Footer
        </div>
    </div>

</div>
@endsection