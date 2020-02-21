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
                <th>More</th>
            </tr>
        </thead>
        <tbody>
            @foreach($series as $serie)

            <tr>
                <td>{{$serie->id}}</td>
                <td>{{$serie->ktid}}</td>
                <td>{{$serie->title}}</td>
                <td>{{$serie->year}}</td>
                <td>{{$serie->country}}</td>
                <td>{{$serie->genre}}</td>
                <td>
                    <div class="btn-group">
                        <a href="{{action('Admin\AdminController@series_view',$serie->id)}}" class="btn btn-sm btn-primary">View</a>
                        <a href="{{action('Admin\AdminController@series_edit',$serie->id)}}" class="btn btn-sm btn-warning">Edit</a>
                        <a href="{{action('Admin\AdminController@series_del',$serie->id)}}" class="btn btn-sm btn-danger">Del</a>
                    </div>
                </td>
            </tr>

            @endforeach
        </tbody>
    </table>
</div>


@endsection