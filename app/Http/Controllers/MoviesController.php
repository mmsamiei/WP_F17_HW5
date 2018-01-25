<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MoviesController extends Controller
{
    public function get_recent ($number=10){
        $movies = DB::table('movies')->orderBy('created_at','DESC')->select('id','title','original_title','year')->take($number)->get();
        return $movies;
    }

    public function get_details ($id){
        $movie = DB::table('movies')->where('id','=',$id)->get();
        return $movie;
    }
}
