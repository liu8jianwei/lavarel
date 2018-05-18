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
    echo "opl";
    dd('juiyuu');
});

Auth::routes();

//Route::group(['middleware'=>'auth','namespace'=>'Admin','prefix'=>'admin'],function(){
//    Route::get('/','HomeController@index');
//    Route::resource('article', 'ArticleController');
//});

Route::get('article/{id}', 'ArticleController@show');
Route::post('comment', 'CommentController@store');

Route::middleware('auth:api', 'throttle:5,1')->group(function () {
    Route::get('/user', function () {
        dd("hello world!");
    });
});