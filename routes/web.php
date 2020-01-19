<?php

Route::get('/', 'RouteController@get');
Route::post('/', 'RouteController@create');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
