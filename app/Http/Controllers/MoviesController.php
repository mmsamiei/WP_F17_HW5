<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MoviesController extends Controller
{
    public function get_recent ($number){
        $movies = DB::table('movies')->orderBy('created_at','DESC')->select('id','title','original_title','year')->take(10)->get();
        return $movies;
    }
}
