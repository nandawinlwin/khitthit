<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Movie;
use App\watchlist;
use App\User;

class FrontendController extends Controller
{
    public function index(){
        //$movies = Movie::where('count','>',0)->orderBy('count', 'desc')->paginate(12);
        $movies = Movie::where('count','=',0)->orderBy('count', 'desc')->simplePaginate(40);
        return view('welcome',compact('movies'));
    }

    public function movie(){
        $movies = Movie::where('type','movie')->orderBy('ktid', 'desc')->simplePaginate(40);
        return view('welcome',compact('movies'));
    }

    public function series(){
        $movies = Movie::where('type','series')->orderBy('ktid', 'desc')->simplePaginate(40);
        return view('welcome',compact('movies'));
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

    
}