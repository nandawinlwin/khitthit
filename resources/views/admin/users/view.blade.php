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
            <h4 class="float-right text-success">Movie Count - {{count($watchlists)}}</h4>
        </div>
        <div class="card-body">
            <div class="card mb-2">
                <div class="card-body">
                    @foreach($watchlists as $w)
                    @foreach($movies as $movie)
                    @if($w->movie_id == $movie->id)
                    {{$movie->ktid}}&nbspOR
                    @endif
                    @endforeach
                    @endforeach
                </div>
            </div>
            <table class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>KT ID</th>
                        <th>Name</th>
                        <th>More</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($watchlists as $w)
                    @foreach($movies as $movie)
                    @if($w->movie_id == $movie->id)
                    <tr>
                        <td>{{$movie->ktid}}</td>
                        <td>{{$movie->title}}</td>

                        <td>
                            <a href="{{ route('user.buy',['movie_id'=>$movie->id,'user_id'=>$user->id]) }}"
                                ><i class="fas fa-money-bill-alt"></i> Buy</a>
                        </td>
                    </tr>
                    @endif
                    @endforeach
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer text-muted">

        </div>
    </div>
</div>
@endsection