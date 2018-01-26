<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('main');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/download', function () {
    return view('download');
});

Route::get('/profile', function () {
    return view('profile');
});


Route::get('/movies/recent/{number?}', 'MoviesController@get_recent')->where('number','[0-9]+');

Route::get('/movies/{id}/details', 'MoviesController@get_details')->where('id','[0-9]+');

Route::get('/movies/{id}/comments',[
    'as' => 'comments.show',
     'uses' => 'CommentsController@get_comments'])->where('id','[0-9]+');

Route::post('/movies/{id}/comments', 'CommentsController@insert_comment')->where('id','[0-9]+');



Route::get('/search', 'MoviesController@search');


Route::get('/submit', function () {
    return view('submit');
});

Route::post('/submit', 'MoviesController@insert_movie');
