<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;


class CommentsController extends Controller
{
    public function get_comments ($id){
        $comments = DB::table('comments')->where('movie_id','=',$id)->get();
        return $comments;
    }

    public function insert_comment ($id){
        $id = DB::table('comments')->insertGetId(
            ['author' => Input::get('author'), 'comment' => Input::get('comment')]);
        return $id;
    }

}
