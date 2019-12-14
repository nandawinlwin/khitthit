@extends('admin.layout.app')
@section('content')

<div class="container">



    <div class="card mt-2">
        <div class="card-header">
            <form action="{{action('PrintController@movie_print_view')}}" method="get">
        
                <div class="row">
                    <div class="col-3">
                        <div class="form-group">
                            <label for="">Start</label>
                            <input type="text" name="start" id="" class="form-control" placeholder="" aria-describedby="helpId">
                            <small id="helpId" class="text-muted"></small>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-group">
                            <label for="">End</label>
                            <input type="text" name="end" id="" class="form-control" placeholder="" aria-describedby="helpId">
                            <small id="helpId" class="text-muted"></small>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-group">
                            <label for="">Type</label>
                            <select name="type" id="" class="form-control">
                                <option value="4">4 Photo</option>
                                <option value="9">9 Photo</option>
                                <option value="16">16 Photo</option>
                            </select>
                            <small id="helpId" class="text-muted"></small>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-group">
                            <label for="">.</label>
                            <input type="submit" name="" id="" class="form-control btn btn-primary btnprn" value="Print Now" placeholder="" aria-describedby="helpId">
                            <small id="helpId" class="text-muted"></small>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="card-body">

            <div class="row mb-2 ml-1">
                <div class="col-xs-1-12">
                    <div class="card mr-1">
                        <div class="card-body">
                            <h3 class="card-title">Page</h3>
                            <p class="card-text">Text</p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-1-12">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">Movie</h3>
                            <p class="card-text">Text</p>
                        </div>
                    </div>
                </div>
            </div>

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
                    @if($movie->type == 'movie')
                    <tr>
                        <td scope="row">{{$movie->ktid}}</td>
                        <td>{{$movie->title}}</td>
                        <td>
                            <a href=""><i class="fas fa-file-powerpoint"></i>View</a>
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

<script type="text/javascript">
    function myFunction() {
        window.print();
    }


    $(document).ready(function() {
        $('.btnprn').printPage();
    });

</script>

@endsection