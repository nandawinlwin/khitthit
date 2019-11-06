@extends('admin.layout.app')
@section('content')

<div class="container">



    <div class="card mt-2">
        <div class="card-header">
            <input type="text" name="" class="form-control" id="">
        </div>
        <div class="card-body">
            <table class="table table-striped table-bordered table-sm">
                <thead class="thead-inverse">
                    <tr>
                        <th>KT ID</th>
                        <th>Movie Title</th>
                        <th style="width:70px;">More</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach($movies as $movie)
                    @if($movie->type == 'series')
                    <tr>
                        <td scope="row">{{$movie->ktid}}</td>
                        <td>{{$movie->title}}</td>
                        <td>
                        <a href=""><i class="fas fa-file-powerpoint"></i> View</a>
                        </td>
                    </tr>
                    @endif
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer text-muted">
            <button class="btn btn-primary" onclick="myFunction()">Prin</button>
        </div>
    </div>

</div>

<script>
function myFunction() {
    window.print();
}
</script>

@endsection