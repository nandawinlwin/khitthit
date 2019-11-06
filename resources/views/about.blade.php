@extends('layouts.app')
@section('content')

<div class="container">

<div class="card">
    <div class="card-header">
        User About
    </div>
    <div class="card-body">
        <h4 class="card-title">Name - {{$user->name}}</h4>
        <hr>
        <p class="card-text">{{$user->email}}</p>
    </div>
    <div class="card-footer text-muted">
        
    </div>
</div>
</div>

@endsection