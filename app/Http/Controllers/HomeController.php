<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\watchlist;
use App\Movie;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function watch(){
        $watchlist = watchlist::all();
        $movies = Movie::all();
        return view('watchlist',compact('watchlist','movies'));
    }

    public function addwatchlist($id){
        $userid = Auth::user()->id;
        $ws = watchlist::all();
        $yes = 0;
        foreach($ws as $w){
            if($w->movie_id == $id & $w->user_id == $userid){
                $yes=1;
                break;
            }
        }

        if($yes == 0){
            $data = new watchlist;
            $data->user_id = $userid;
            $data->movie_id = $id;
            $data->buy = 0;
            $data->save();
        }
        
        return back();

    }

    public function removewatchlist($id){
        $data = watchlist::where('movie_id',$id)->get();
        foreach($data as $d){
            if($d->movie_id == $id & $d->user_id == Auth::user()->id ){
                $watchlist = watchlist::findOrFail($d->id);
                $watchlist->delete();
            }
        }
        
        return redirect('watchlist');

    }


    public function about(){
        $user = Auth::user();
        return view('about',compact('user'));
    }
}