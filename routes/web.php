<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('home');
});


Route::group(['middleware' => ['web']], function() {
//    Route::resource('message','MessagesController');
//    Route::resource('message/login/','MessagesController@index');
////    Route::resource('comments', 'CommentController');
Route::resource('/home', 'HomeController');
});



Auth::routes();

