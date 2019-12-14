<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\api;
use App\Movie;
use App\User;
use App\watchlist;
use App\buylist;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $movies = Movie::where('count','>',0)->orderBy('count', 'desc')->get();
        return view('admin.admin',compact('movies'));
    }


    //Setting

    public function setting(){
        $api = api::all();
        $count = count($api);
        $api_key = api::findOrFail($count);
        return view('admin.setting',compact('api_key'));
        
    }

    public function apisave(Request $request){
        $api = new api;
        $api->name = 'key';
        $api->value = $request->key;
        $api->save();
        return redirect('/setting');
    }


    //Movie

    public function movie(){
        $movies = Movie::where('type','movie')->orderBy('ktid', 'desc')->get();
        return view('admin.movie.show',compact('movies'));
    }

    public function series(){
        $movies = Movie::where('type','series')->orderBy('ktid', 'desc')->get();;
        return view('admin.movie.show',compact('movies'));
    }

    public function movie_view($id){
        $movie = Movie::findOrFail($id);
        return view('admin.movie.view',compact('movie'));
    }

    public function movie_create(){
        $movies = Movie::where('type','movie')->orderBy('ktid', 'desc')->get();
        return view('admin.movie.create',compact('movies'));
    }

    public function movie_manual(){
        $movies = Movie::where('type','movie')->orderBy('ktid', 'desc')->get();
        return view('admin.movie.manual',compact('movies'));
    }

    public function movie_manual_save(Request $request){

        $movie = new Movie;
        $movie->imdbid = $request->imdbid;
        $movie->ktid = $request->ktid;
        $movie->title = $request->Title;
        $movie->year = $request->Year;
        $movie->rated = $request->Rated;
        $movie->runtime = $request->Runtime;
        $movie->genre = $request->Genre;
        $movie->director = $request->Director;
        $movie->actors = $request->Actors;
        $movie->plot = $request->Plot;
        $movie->country = $request->Country;
        $movie->poster = $request->Poster;
        $movie->imdbrating = $request->imdbRating;
        $movie->type = $request->Type;
        $movie->save();
        return redirect('movie/create');
    }

    public function movie_create_save(Request $request){
        $api = api::all();
        $count = count($api);
        $api_key = api::findOrFail($count);
        $data = json_decode(file_get_contents("http://www.omdbapi.com/?i=".$request->imdbid."&apikey=".$api_key->value));
        $movie = new Movie;
        $movie->imdbid = $request->imdbid;
        $movie->ktid = $request->ktid;
        $movie->title = $data->Title;
        $movie->year = $data->Year;
        $movie->rated = $data->Rated;
        $movie->runtime = $data->Runtime;
        $movie->genre = $data->Genre;
        $movie->director = $data->Director;
        $movie->actors = $data->Actors;
        $movie->plot = $data->Plot;
        $movie->country = $data->Country;
        $movie->poster = $data->Poster;
        $movie->imdbrating = $data->imdbRating;
        $movie->type = $data->Type;
        $movie->save();
        return redirect('movie/create');
    }



    public function movie_updat(Request $request,$id){

        $movie = Movie::findOrFail($id);
        $movie->ktid = $request->ktid;
        $movie->title = $request->Title;
        $movie->year = $request->Year;
        $movie->runtime = $request->Runtime;
        $movie->genre = $request->Genre;
        $movie->director = $request->Director;
        $movie->actors = $request->Actors;
        $movie->plot = $request->Plot;
        $movie->country = $request->Country;
        $movie->poster = $request->Poster;
        $movie->imdbrating = $request->imdbRating;
        $movie->type = $request->Type;
        $movie->update();
        return back();
    }


    public function movie_edit($id){
        $movie = Movie::findOrFail($id);
        return view('admin.movie.edit',compact('movie'));
    }

    public function movie_del($id){
        $movie = Movie::findOrFail($id);
        $movie->delete();
        return back();
    }


    //series


    public function series_create(){
        $movies = Movie::where('type','series')->orderBy('ktid', 'desc')->get();
        return view('admin.movie.series_create',compact('movies'));
    }

    public function series_create_save(Request $request){
        $api = api::all();
        $count = count($api);
        $api_key = api::findOrFail($count);
        $data = json_decode(file_get_contents("http://www.omdbapi.com/?i=".$request->imdbid."&apikey=".$api_key->value));
        $movie = new Movie;
        $movie->imdbid = $request->imdbid;
        $movie->ktid = $request->ktid;
        $movie->series_group = $request->group;
        $movie->title = $data->Title;
        $movie->year = $data->Year;
        $movie->rated = $data->Rated;
        $movie->runtime = $data->Runtime;
        $movie->genre = $data->Genre;
        $movie->director = $data->Director;
        $movie->actors = $data->Actors;
        $movie->plot = $data->Plot;
        $movie->country = $data->Country;
        $movie->poster = $data->Poster;
        $movie->imdbrating = $data->imdbRating;
        $movie->type = $data->Type;
        $movie->save();
        return redirect('series/create');
    }


    //animations


    public function anamation_create(){
        
    }

    public function anamation_show(){

    }

    public function anamation_view($id){

    }

    public function anamation_edit($id){

    }

    public function anamation_update($id){

    }



    //users
    public function users(){
        $users = User::where('admin',null)->get();
        return view('admin.users.users',compact('users'));
    }

    public function user_view($id){
        $watchlists = watchlist::where('user_id',$id)->get();
        $user = User::findOrFail($id);
        $movies = Movie::all();
        return view('admin.users.view',compact('user','watchlists','movies','id'));
    }

    public function buylist($id){
        $buylists = buylist::where('user_id',$id)->get();
        $user = User::findOrFail($id);
        $movies = Movie::all();
        return view('admin.users.buy',compact('user','buylists','movies','id'));

    }

    public function buylist_save($movie_id,$user_id){
        $movie = Movie::findOrFail($movie_id);
        $i = $movie->count + 1;
        $movie->count = $i;
        $movie->update();
        
        $watchlists = watchlist::where([['user_id','=',$user_id],['movie_id','=',$movie_id]])->get();
        foreach($watchlists as $w){
                $data = watchlist::findOrFail($w->id);
                $data->delete();
        }
        $buylist = new buylist;
        $buylist->user_id = $user_id;
        $buylist->movie_id = $movie_id;
        $buylist->movie_title = $movie->title;
        $buylist->ktid = $movie->ktid;
        $buylist->save();

        

        return back();
    }

    


}
