<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class PrintController extends Controller
{
    public function print(){
        
    }

    public function movie_print(){
        $movies = Movie::all();
        return view('admin.print.movie_print',compact('movies'));
    }

    public function movie_print_view(Request $request){
        
        $movies = Movie::where([['ktid','>=',$request->start],['ktid','<=',$request->end]])->select('ktid','title','country')->get();
        $start = $request->start;
        $end = $request->end;
        $type = $request->type;
        $exp = count($movies) % $type;
        $temp = (count($movies) - $exp);
        $page = $temp / $type;
        return view('admin.print.movie_print_view',compact('movies','start','end','page','exp','type'));
    }

    public function series_print(){
        $movies = Movie::all();
        return view('admin.print.series_print',compact('movies'));
    }

    public function series_print_view($id){
        $series = Movie::findOrFail($id);
        return view('admin.print.series_print_view',compact('series'));
    }
}
