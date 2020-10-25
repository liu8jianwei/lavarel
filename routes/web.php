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
    return view('welcome');
});

Route::get('foo', function () {
    return 'Hello World';
});

Route::get('/ElaSearch', 'ElaSearchController@index');
Route::get('/MqTest', 'MqTestController@index');

Route::view('/welcome', 'welcome', ['name' => 'Taylor']);

Route::post('login', 'Api\PassportController@login');
Route::post('register', 'Api\PassportController@register');

Route::get('queue', 'Queue@index');
Route::get('index', 'Queue@insert');

Route::group(['middleware' => 'auth:api'], function () {
    Route::post('get-details', 'Api\PassportController@getDetails');
});
