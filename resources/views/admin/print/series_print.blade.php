@extends('admin.layout.app')
@section('content')

<script src="{{asset('assets/js/jquery.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/datatable/dataTables.bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.printPage.js')}}"></script>
<script src="{{asset('assets/js/jquery.table2excel.js')}}"></script>
<script src="{{asset('assets/js/jquery.table2excel.min.js')}}"></script>
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
                            <a href="{{action('PrintController@series_print_view',$movie->id)}}" class="btnprn"><i
                                    class="fas fa-file-powerpoint "></i> View</a>
                        </td>
                    </tr>
                    @endif
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer text-muted">

        </div>
    </div>

</div>

<script type="text/javascript">
$(document).ready(function() {
    $('.btnprn').printPage();
});
</script>


@endsection