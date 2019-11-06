@extends('admin.layout.app')
@section('title','Users View')
@section('content')
<div class="container mt-2">
    <div class="btn-group m-2 float-right">
        <a href="{{action('Admin\AdminController@user_view',$id)}}" class="btn btn-sm btn-primary">Watchlist</a>
        <a href="{{action('Admin\AdminController@buylist',$id)}}" class="btn btn-sm btn-primary">Buylist</a>
    </div>
    <div class="clearfix"></div>
    <div class="card">
        <div class="card-header">
            <h4 class="float-left text-primary">User Name - {{$user->name}} / Email - {{$user->email}}</h4>
            <h4 class="float-right text-success">Movie Count - {{count($buylists)}}</h4>
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
            <table id="myDIV" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>KT ID</th>
                        <th>Name</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody id="">
                    @foreach($buylists as $buy)
                    <tr>
                        <td>{{$buy->ktid}}</td>
                        <td>{{$buy->movie_title}}</td>
                        <td>{{$buy->created_at}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer text-muted">

        </div>
    </div>
</div>

<script>

</script>
@endsection