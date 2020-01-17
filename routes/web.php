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

//Route::get('/', function () {
//    return view('welcome');
//});


//Route::get('/', 'RouteController@get');
//Route::post('/', 'RouteController@create');

//Route::get('/', function () {
//    return view('cargofy');
//});

//
//Route::get('/', 'RouteController@get');
//Route::post('/', 'RouteController@create');

//Route::get('/try', function (Request $request) {
//
//    $link = tap(new App\Http\Controllers\RouteController())->get();
//
//    return view('cargofy');
//});
Route::get('/', 'RouteController@get');
Route::post('/', 'RouteController@create');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
