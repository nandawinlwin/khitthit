@extends('layouts.app')
@section('content')

<div class="container mt-5">

<div class="card">
    <div class="card-header bg-dark" style="color:white">
        User About
    </div>
    <div class="card-body">
        <h4 class="card-title">USER ID - {{111110+$user->id}}</h4>
        <hr>
        <h4 class="card-title">Name - {{$user->name}}</h4>
        <hr>
        <p class="card-text">Email - {{$user->email}}</p>
    </div>
    <div class="card-footer text-muted bg-dark">
        
    </div>
</div>
</div>

@endsection