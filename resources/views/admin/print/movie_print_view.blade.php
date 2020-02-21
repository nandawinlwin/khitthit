@extends('admin.layout.app')
@section('content')


<script src="{{asset('assets/js/jquery.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/datatable/dataTables.bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.printPage.js')}}"></script>
<script src="{{asset('assets/js/jquery.table2excel.js')}}"></script>
<script src="{{asset('assets/js/jquery.table2excel.min.js')}}"></script>

<div class="container mt-3">

  <div class="card border-primary">
    <img class="card-img-top" src="holder.js/100px180/" alt="">
    <div class="card-body">
      <h4 class="card-title">{{$start}} TO {{$end}}</h4>
      <p class="card-text">
        Total Count : {{count($movies)}} <br>
        Type : {{$type}} Photo <br>
        Page Count : {{$page}} <br>
        Surplus : {{$exp}}
      </p>

      <?php $x = 0; ?>

      @foreach($movies as $movie)
      @if($x == $movie->ktid-1)
      <span>{{$movie->ktid}}</span>
      @else
      <span style="color:red;">{{$movie->ktid}}</span>
      @endif

      <?php
      $x = $movie->ktid;
      ?>

      @endforeach
    </div>
  </div>

  <br>

  <a href="{{url('print/movie/now')}}/{{$type}}/{{$start}}/{{$end}}" class="btnprn btn btn-primary pull-right"><i class="fas fa-file-powerpoint"></i> Print Now</a>

  <script type="text/javascript">
    $(document).ready(function() {
      $('.btnprn').printPage();
    });
  </script>

  @endsection