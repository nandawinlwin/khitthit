@extends('admin.layout.app')
@section('title','Setting')
@section('content')
<div class="container">
    <div class="btn-group mt-2 float-right">
        <a class="btn btn-sm btn-primary" href="{{url('/movie/create')}}" role="button">Auto</a>
        <a class="btn btn-sm btn-primary" href="{{url('/movie/manual')}}" role="button">Manual</a>
    </div>
    <div class="clearfix"></div>
    <div class="card mt-2">
        <div class="card-header">
            New Movie
        </div>
        <div class="card-body">
            <form action="{{action('Admin\AdminController@movie_create_save')}}" method="post">
                @csrf
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="">IMDB ID</label>
                            <input type="text" name="imdbid" id="" class="form-control" placeholder="imdb id">
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="form-group">
                            <label for="">KT ID</label>
                            <input type="text" name="ktid" id="myInput" id="" class="form-control" placeholder="kt id">
                        </div>
                    </div>

                </div>

                <input type="submit" class="btn btn-primary float-right" value="Input">
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
                        <th>IMDB ID</th>
                        <th>Name</th>
                        <th>Year</th>
                        <th>Country</th>
                        <th>Genre</th>
                        <th>More</th>
                    </tr>
                </thead>
                <tbody id="myDIV">
                    @foreach($movies as $movie)
                    <tr>
                        <td scope="row">{{$movie->ktid}}</td>
                        <td>{{$movie->imdbid}}</td>
                        <td>{{$movie->title}}</td>
                        <td>{{$movie->year}}</td>
                        <td>{{$movie->country}}</td>
                        <td>{{$movie->genre}}</td>
                        <td>
                            <a href="{{action('Admin\AdminController@movie_view',$movie->id)}}" class="text-primary"><i
                                    class="far fa-eye"></i></a>

                            <a href="{{action('Admin\AdminController@movie_del',$movie->id)}}" class="text-danger"><i
                                    class="fa fa-trash"></i></a>
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