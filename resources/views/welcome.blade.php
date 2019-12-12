@extends('layouts.app')
@section('content')

<style>
    .aspect-16to9 {
        height: auto;
        width: 100%;
    }

    .p-16to9 {
        position: relative;
        padding-bottom: 56%;
        overflow: hidden;
    }

    .card-body-content {
        position: absolute;
        top: 1rem;
        bottom: 1rem;
        right: 1rem;
        left: 1rem;
        overflow: hidden;
    }
    .col-6,.col-md-3{
        padding: 1px;
    }
</style>
<div class="container">


    <div class="row">


        @foreach($movies as $movie)

        <div class="col-6 col-lg-3 col-md-4 col-sm-6 m-0">
            <a href="{{action('FrontendController@view',$movie->id)}}" style="text-decoration: none;color:black;">
                <div class="card text-white bg-dark mt-2">
                    <img class="card-img-top" src="{{$movie->poster}}" alt="" height="300px;">
                    <div class="card-body" style="height:150px;overflow: hidden;">
                        @if($movie->type == 'series')
                        @if($movie->country == 'USA')
                        <span class="pull-left">E-{{$movie->ktid}} </span> <span class="pull-right"><i class="fa fa-star"></i> {{$movie->imdbrating}} <br></span>
                        @endif
                        @else
                        <span class="pull-left">{{$movie->ktid}} </span> <span class="pull-right"><i class="fa fa-star"></i> {{$movie->imdbrating}} <br></span>
                        @endif
                        <span class='clearfix'></span>
                        <h4 class="card-title">
                            {{mb_strimwidth($movie->title, 0, 15,'...')}}
                        </h4>
                        <p class="card-text">{{$movie->year}}</p>


                        @if($movie->type == 'series')
                        <span class="float-right">{{$movie->type}}</span>
                        @endif
                    </div>
                </div>
            </a>
        </div>
        @endforeach

    </div>

    <hr>
    <span class="mt-2">{{ $movies->links() }}</span>
</div>



<!-- Modal -->
<form method="POST" action="{{ route('login') }}">
    <div class="modal fade mt-5" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-dark" style="color:white">
                    <h5 class="modal-title" id="exampleModalLabel">{{ __('Login') }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    @csrf

                    <div class="form-group row">
                        <label for="email" class="col-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-6 offset-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                        @endif
                        <button type="submit" class="btn btn-primary">
                            {{ __('Login') }}
                        </button>


                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

</form>
@guest
<script>
    $('#exampleModal').modal({
        show: true
    })
</script>
@endif

@endsection