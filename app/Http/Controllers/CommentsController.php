<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CommentsController extends Controller
{
    public function get_comments ($id){
        $comments = DB::table('comments')->where('movie_id','=',$id)->get();
        return $comments;
    }
}
