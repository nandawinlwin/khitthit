@extends('admin.layout.app')
@section('content')

<div class="container">



    <div class="card mt-2">
        <div class="card-header">
            Move Print
        </div>
        <div class="card-body">
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
        <div class="card-footer text-muted">

        </div>
    </div>




    <div class="card mt-2">
        <div class="card-header">
            Move Year Print
        </div>
        <div class="card-body">
            <form action="{{action('PrintController@movie_print_filter_year')}}" method="get">

                <div class="row">
                    <div class="col-3">
                        <div class="form-group">
                            <label for="">Year</label>
                            <select name="year" id="" class="form-control">
                                <option value="">All</option>
                                <option value="2020">2020</option>
                                <option value="2019">2019</option>
                                <option value="2018">2018</option>
                                <option value="2017">2017</option>
                                <option value="2016">2016</option>
                                <option value="2015">2015</option>
                                <option value="2014">2014</option>
                            </select>
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

                    <div class="col-3"></div>

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
        <div class="card-footer text-muted">

        </div>
    </div>




    <div class="card mt-2">
        <div class="card-header">
            Move Genre Print
        </div>
        <div class="card-body">
            <form action="{{action('PrintController@movie_print_view')}}" method="get">

                <div class="row">
                    <div class="col-3">
                        <div class="form-group">
                            <label for="">Genre</label>
                            <select name="genre" id="" class="form-control">
                                <option value="">All</option>
                                <option value="Action">Action</option>
                                <option value="Drama">Drama</option>
                                <option value="War">War</option>
                                <option value="Horror">Horror</option>
                                <option value="Animation">Animation</option>
                                <option value="Comedy">Comedy</option>
                                <option value="Adventure">Adventure</option>
                            </select>
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

                    <div class="col-3"></div>


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
        <div class="card-footer text-muted">

        </div>
    </div>



    <div class="card mt-2">
        <div class="card-header">
            Move Country Print
        </div>
        <div class="card-body">
            <form action="{{action('PrintController@movie_print_view')}}" method="get">

                <div class="row">
                    <div class="col-3">
                        <div class="form-group">
                            <label for="">Country</label>
                            <select name="country" id="" class="form-control">
                                <option value="">All</option>
                                <option value="">India</option>
                                <option value="">Thailand</option>
                                <option value="">Japan</option>
                                <option value="">China</option>
                                <option value="">Other</option>
                            </select>
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

                    <div class="col-3"></div>


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
        <div class="card-footer text-muted">

        </div>
    </div>

</div>


@endsection