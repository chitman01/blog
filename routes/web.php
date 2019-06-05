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

Route::get('Welcome/name','helloController@showHello');

Route::get('show/{name}','helloController@showName');

Route::get('/show','helloController@show');

Route::get('/home', function () {
    return view('create.home');
});

Route::get('/create', function(){
    return view('create.create');
});