@extends('admin.layout.app')
@section('content')

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
  </div>
</div>

</div>



@endsection