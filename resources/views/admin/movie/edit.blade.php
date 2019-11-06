@extends('admin.layout.app')
@section('title','View Movie')
@section('content')

<div class="container mt-2">
    <form action="{{action('Admin\AdminController@movie_updat',$movie->id)}}" method="post">
        <div class="card">
            <div class="card-header">
                <h3 class="float-left">{{$movie->title}} Edit</h3>
                <input type="submit" value="Save" class="btn btn-primary btn-sm float-right">
            </div>
            <div class="card-body">

                @csrf
                <div class="row">


                    <div class="col-6">
                        <label for="">KT ID</label>
                        <input type="text" name="ktid" value="{{$movie->ktid}}" id="" class="form-control"
                            placeholder="" aria-describedby="helpId">
                        <hr>
                        <label for="">Name</label>
                        <input type="text" name="Title" value="{{$movie->title}}" id="" class="form-control"
                            placeholder="" aria-describedby="helpId">
                        <hr>
                        <label for="">Year</label>
                        <input type="text" name="Year" value="{{$movie->year}}" id="" class="form-control"
                            placeholder="" aria-describedby="helpId">
                        <hr>
                        <label for="">country</label>
                        <input type="text" name="Country" value="{{$movie->country}}" id="" class="form-control"
                            placeholder="" aria-describedby="helpId">
                        <hr>
                        <label for="">Runtime</label>
                        <input type="text" name="Runtime" value="{{$movie->runtime}}" id="" class="form-control"
                            placeholder="" aria-describedby="helpId">

                        <hr>
                        <label for="">Type</label>
                        <input type="text" name="Type" value="{{$movie->type}}" id="" class="form-control"
                            placeholder="" aria-describedby="helpId">

                    </div>

                    <div class="col-6">

                        <label for="">Rating</label>
                        <input type="text" name="imdbRating" value="{{$movie->imdbrating}}" id="" class="form-control"
                            placeholder="" aria-describedby="helpId">
                        <hr>
                        <label for="">Actors</label>
                        <input type="text" name="Actors" value="{{$movie->actors}}" id="" class="form-control"
                            placeholder="" aria-describedby="helpId">
                        <hr>
                        <label for="">genre</label>
                        <input type="text" name="Genre" value="{{$movie->genre}}" id="" class="form-control"
                            placeholder="" aria-describedby="helpId">
                        <hr>
                        <label for="">Director</label>
                        <input type="text" name="Director" value="{{$movie->director}}" id="" class="form-control"
                            placeholder="" aria-describedby="helpId">
                        <hr>
                        <label for="">Poster Link</label>
                        <input type="text" name="Poster" value="{{$movie->poster}}" id="" class="form-control"
                            placeholder="" aria-describedby="helpId">
                    </div>

                    <div class="col-12">
                        <label for="">Plot</label>
                        <textarea name="Plot"  cols="" rows="10" class="form-control">{{$movie->plot}}</textarea>
                    </div>


                </div>
    </form>
</div>
<div class="card-footer text-muted">
</div>
</div>
</div>

<script>
CKEDITOR.replace('texttarea');

CKEDITOR.on( 'instanceCreated', function( event ) {
 editor.on( 'configLoaded', function() {
  editor.config.basicEntities = false;
  editor.config.entities_greek = false; 
  editor.config.entities_latin = false; 
  editor.config.entities_additional = '';

 });
});


</script>

@endsection