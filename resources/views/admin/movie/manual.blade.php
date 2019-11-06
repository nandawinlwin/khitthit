@extends('admin.layout.app')
@section('title','Setting')
@section('content')
<div class="container">
    <div class="btn-group mt-2 float-right">
        <a class="btn btn-sm btn-primary" href="{{url('/movie/create')}}" role="button">Auto</a>
        <a class="btn btn-sm btn-primary" href="{{url('/movie/manual')}}" role="button">Manual</a>
    </div>
    <div class="clearfix"></div>

    <form action="{{action('Admin\AdminController@movie_manual_save')}}" method="post" class="mt-2">
        <div class="card">
            <div class="card-header">
                <h3 class="float-left">Manual Crate</h3>
                <input type="submit" value="Save" class="btn btn-primary btn-sm float-right">
            </div>
            <div class="card-body">

                @csrf
                <div class="row">


                    <div class="col-6">
                        <label for="">KT ID</label>
                        <input type="text" name="ktid" value="" id="" class="form-control" placeholder=""
                            aria-describedby="helpId">
                        <hr>
                        <label for="">IMDB ID</label>
                        <input type="text" name="imdbid" value="" id="" class="form-control" placeholder=""
                            aria-describedby="helpId">
                        <hr>
                        <label for="">Name</label>
                        <input type="text" name="Title" value="" id="" class="form-control" placeholder=""
                            aria-describedby="helpId">
                        <hr>
                        <label for="">Year</label>
                        <input type="text" name="Year" value="" id="" class="form-control" placeholder=""
                            aria-describedby="helpId">
                        <hr>
                        <label for="">country</label>
                        <input type="text" name="Country" value="" id="" class="form-control" placeholder=""
                            aria-describedby="helpId">
                        <hr>
                        <label for="">Runtime</label>
                        <input type="text" name="Runtime" value="" id="" class="form-control" placeholder=""
                            aria-describedby="helpId">

                        <hr>

                    </div>

                    <div class="col-6">

                        <label for="">Type</label>
                        <input type="text" name="Type" value="" id="" class="form-control" placeholder=""
                            aria-describedby="helpId">

                        <hr>

                        <label for="">Rating</label>
                        <input type="text" name="imdbRating" value="" id="" class="form-control" placeholder=""
                            aria-describedby="helpId">
                        <hr>
                        <label for="">Actors</label>
                        <input type="text" name="Actors" value="" id="" class="form-control" placeholder=""
                            aria-describedby="helpId">
                        <hr>
                        <label for="">genre</label>
                        <input type="text" name="Genre" value="" id="" class="form-control" placeholder=""
                            aria-describedby="helpId">
                        <hr>
                        <label for="">Director</label>
                        <input type="text" name="Director" value="" id="" class="form-control" placeholder=""
                            aria-describedby="helpId">
                        <hr>
                        <label for="">Poster Link</label>
                        <input type="text" name="Poster" value="" id="" class="form-control" placeholder=""
                            aria-describedby="helpId">
                        <hr>
                    </div>



                    <div class="col-12">
                        <label for="">Plot</label>
                        <textarea name="Plot" id="texttarea" cols="" rows="10" class="form-control"></textarea>
                    </div>


                </div>
    </form>


    <div class="card mt-2">
        <div class="card-header">
            Header
        </div>
        <div class="card-body">
            <input id="myInput" class="form-control mb-3" type="text" placeholder="Search..">

            <script>
            $(document).ready(function() {
                $("#myInput").on("keyup", function() {
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
                                    class="far fa-eye"></i> View</a>

                            <a href="{{action('Admin\AdminController@movie_del',$movie->id)}}" class="text-danger"><i
                                    class="fa fa-trash"></i> Del</a>
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