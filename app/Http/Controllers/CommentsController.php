<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;


class CommentsController extends Controller
{
    public static  function get_comments ($id){
        $comments = DB::table('comments')->where('movie_id','=',$id)->get();


        return $comments;
    }

    public function insert_comment (Request $request){

        $comment_text = $request->input('comment_text');



        date_default_timezone_set('Asia/Tehran');
        $date = date('Y:m:d h:i:s', time());

        $id = DB::table('comments')->insertGetId(
            ['author' => 'guest', 'comment' => Input::get('comment_text'),'movie_id' => Input::get('movie_id'), 'created_at' => $date ,'rate'=>3]);

        return redirect('/download?id='.Input::get('movie_id'));
    }

}
