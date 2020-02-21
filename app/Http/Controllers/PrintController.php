<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\series;

class PrintController extends Controller
{
    public function print(){
        
    }

    public function movie_print(){
        $movies = Movie::all();
        return view('admin.print.movie_print',compact('movies'));
    }

    public function movie_print_view(Request $request){
        
        $movies = Movie::where([['ktid','>=',$request->start],['ktid','<=',$request->end]])->orderBy('ktid', 'asc')->select('ktid','title','country','poster')->get();
        $start = $request->start;
        $end = $request->end;
        $type = $request->type;
        $exp = count($movies) % $type;
        $temp = (count($movies) - $exp);
        $page = $temp / $type;
        return view('admin.print.movie_print_view',compact('movies','start','end','page','exp','type'));
    }

    public function movie_print_filter_year(Request $request){
        
        $movies = Movie::where([['year','=',$request->year]])->orderBy('ktid', 'asc')->select('ktid','title','country','poster')->get();
        $type = $request->type;
        $exp = count($movies) % $type;
        $temp = (count($movies) - $exp);
        $page = $temp / $type;
        $year = $request->year;
        return view('admin.print.filter_movie_print',compact('movies','page','exp','type','year'));
    }

    public function movie_print_now_year($year,$type){
        $movies = Movie::where([['year','=',$year]])->orderBy('ktid', 'asc')->select('ktid','title','country','year','poster','genre')->get();
        return view('admin.print.movie_print_now',compact('movies','type','year'));
    }

    public function movie_print_now($type,$start,$end){
        $movies = Movie::where([['ktid','>=',$start],['ktid','<=',$end]])->orderBy('ktid', 'asc')->select('ktid','title','country','year','poster','genre')->get();
        return view('admin.print.movie_print_now',compact('movies','type'));
    }

    public function movie_print_year($year,$type){
        $movies = Movie::where([['year','=',$year]])->orderBy('ktid', 'asc')->select('ktid','title','country','year','poster','genre')->get();
        return view('admin.print.movie_print_now',compact('movies','type','year'));
    }

    public function series_print(){
        $movies = series::all();
        return view('admin.print.series_print',compact('movies'));
    }

    public function series_print_view($id){
        $series = series::findOrFail($id);
        return view('admin.print.series_print_view',compact('series'));
    }
}
