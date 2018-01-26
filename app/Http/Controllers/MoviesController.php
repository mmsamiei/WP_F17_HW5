<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;


class MoviesController extends Controller
{
    public  function get_recent ($number=10){
        $movies = DB::table('movies')->orderBy('created_at','DESC')->select('id','title','original_title','year')->take($number)->get();
        return $movies;
    }

    public function get_details ($id){
        $movie = DB::table('movies')->where('id','=',$id)->get();
        return $movie;
    }

    public static function search (){
        $query =  \Illuminate\Support\Facades\Input::get("q");
        $movies = DB::table('movies')->where('title','LIKE','%'.$query.'%')->orwhere('original_title','LIKE','%'.$query.'%')->orwhere('description','LIKE','%'.$query.'%')->select('id','title')->get();
        return $movies;
    }

    public function insert_movie (Request $request){





        date_default_timezone_set('Asia/Tehran');
        $date = date('Y:m:d h:i:s', time());


        $file = Input::file('cover');
        $file->move(public_path()."/posters", $file->getClientOriginalName());

        $id = DB::table('movies')->insertGetId(
            ['created_at' => $date, 'title' => Input::get('title'),
                'original_title' => Input::get('original_title'),
                'rate' => Input::get('rate'), 'year' => Input::get('year'),'length' => Input::get('length'),
                'language' => Input::get('language'), 'country' => Input::get('country'),
                'description' => Input::get('description'), 'director' => Input::get('director'),
                'writer' => Input::get('writer'), 'stars' => Input::get('stars'),
                'category' => Input::get('category'), 'cover' => $file->getClientOriginalName()]);

        return redirect('/');
    }

}
