@extends('admin.layout.app')
@section('title','Setting')
@section('content')
<div class="container">
    <div class="card mt-2">
        <div class="card-header">
            Setting
        </div>
        <div class="card-body">


            <form action="{{action('Admin\AdminController@apisave')}}" method="post">
            @csrf
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="">API Key</label>
                            <input type="text" name="key" id="" class="form-control" value=""
                                aria-describedby="helpId">
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="form-group">
                            <label for="">.</label>
                            <div class="">
                                <input type="Submit" name="" id="" class="btn btn-primary" value="Save">
                                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                <span class="text-success">{{$api_key->value}}</span> 
                            </div>
                        </div>
                        
                    </div>

                    

                </div>
            </form>

        </div>
    </div>
    <div class="card-footer text-muted">

    </div>
</div>
</div>
@endsection