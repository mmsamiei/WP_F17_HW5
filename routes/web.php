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


Route::get('/movies/recent/{number}', function () {
    return view('register');
})->where('number','[0-9]+');

Route::get('/movies/{id}/details', function () {
    return view('register');
})->where('id','[0-9]+');

Route::get('/movies/{id}/comments', function () {
    return view('register');
})->where('id','[0-9]+');

Route::post('/movies/{id}/comments', function () {
    return view('register');
})->where('id','[0-9]+');

Route::get('/search', function () {
    return \Illuminate\Support\Facades\Input::get("q");
});

Route::post('/submit', function () {
    return view('register');
});
