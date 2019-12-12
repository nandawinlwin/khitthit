@extends('admin.layout.app')
@section('title','Setting')
@section('content')
<div class="container mt-2">
        <table class="table table-striped table-bordered" id="example" style="width:100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>KT ID</th>
                    <th>Name</th>
                    <th>Year</th>
                    <th>Country</th>
                    <th>Genre</th>
                </tr>
            </thead>
            <tbody>
                @foreach($movies as $movie)

                <tr>
                    <td>{{$movie->id}}</td>
                    <td>{{$movie->ktid}}</td>
                    <td>{{$movie->title}}</td>
                    <td>{{$movie->year}}</td>
                    <td>{{$movie->country}}</td>
                    <td>{{$movie->genre}}</td>
                </tr>

                @endforeach
            </tbody>
        </table>
</div>


@endsection