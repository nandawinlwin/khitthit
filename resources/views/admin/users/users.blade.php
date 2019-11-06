@extends('admin.layout.app')
@section('title','Users')
@section('content')
<div class="container mt-2">


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

    <div class="card">
        <div class="card-header">
            Users
        </div>
        <div class="card-body">
           <table class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
               <thead>
                   <tr>
                       <th>Name</th>
                       <th>Email</th>
                       <th>More</th>
                   </tr>
               </thead>
               <tbody  id="myDIV">
                   @foreach($users as $user)
                        <tr>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>
                                <a href="{{action('Admin\AdminController@user_view',$user->id)}}" class="text-primary"><i class="far fa-eye"></i> View</a>
                            </td>
                        </tr>
                   @endforeach
               </tbody>
           </table>
        </div>
        <div class="card-footer text-muted">
           
        </div>
    </div>
</div>
@endsection