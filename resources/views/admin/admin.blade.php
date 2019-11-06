@extends('admin.layout.app')
@section('content')
<div class="container">
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
                        <th>Name</th>
                        <th>Year</th>
                        <th>Country</th>
                        <th>Genre</th>
                        <th>Actors</th>
                        <th>Director</th>
                        <th>Count</th>
                        <th>More</th>
                    </tr>
                </thead>
                <tbody id="myDIV">
                    @foreach($movies as $movie)
                    <tr>
                        <td scope="row">{{$movie->ktid}}</td>
                        <td>{{$movie->title}}</td>
                        <td>{{$movie->year}}</td>
                        <td>{{$movie->country}}</td>
                        <td>{{$movie->genre}}</td>
                        <td>{{$movie->actors}}</td>
                        <td>{{$movie->director}}</td>
                        <td>{{$movie->count}}</td>
                        <td>
                            <a href="{{action('Admin\AdminController@movie_view',$movie->id)}}" class="text-primary"><i
                                    class="far fa-eye"></i> View</a>
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