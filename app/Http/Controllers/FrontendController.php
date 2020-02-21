<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Movie;
use App\watchlist;
use App\User;
use App\series;

class FrontendController extends Controller
{
    public function index(){
        //$movies = Movie::where('count','>',0)->orderBy('count', 'desc')->paginate(12);
        $movies = Movie::where('count','=',0)->orderBy('ktid', 'desc')->simplePaginate(84);
        return view('welcome',compact('movies'));
    }

    public function movie(){
        $movies = Movie::where('type','movie')->orderBy('ktid', 'desc')->simplePaginate(40);
        return view('welcome',compact('movies'));
    }

    public function series($country){
        $series = series::where('country', $country)->get();
        return view('series',compact('series'));
    }

    public function series_view($id){
        $watch = watchlist::all();
        $yes = 0;
        if(Auth::check()){

            foreach($watch as $w){
                if($w->movie_id == $id & Auth::user()->id == $w->user_id){
                    $yes = 1;
                    break;
                }
            }
        }
        
        $movie = series::findOrFail($id);
        return view('series_view',compact('movie','yes'));
    }

    public function view($id){
        $watch = watchlist::all();
        $yes = 0;
        if(Auth::check()){

            foreach($watch as $w){
                if($w->movie_id == $id & Auth::user()->id == $w->user_id){
                    $yes = 1;
                    break;
                }
            }
        }
        
        $movie = Movie::findOrFail($id);
        return view('view',compact('movie','yes'));
    }

    public function search(){
        $movies = Movie::orderBy('ktid', 'desc')->get();
        return view('search',compact('movies'));
    }


    public function short(){
        $red = "https://www.google.com/";
        return redirect($red);
    }

    public function api($id,$key){
       if($key == "0000"){

        $temp = Movie::findOrFail($id);
        $movies = json_encode($temp) ;
        return ($movies);

       }else{

        return "No Data";
        
       }
    }

    
}