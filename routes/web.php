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
    return view('home');
});


Route::get('/blog', function () {
    return view('blog');
});

// CONTROLLER BUKU
Route::get('/buku','BukuController@index');
Route::get('/buku/create','BukuController@create');
Route::post('/buku/store','BukuController@store');
Route::get('/buku/edit/{id}','BukuController@edit');
Route::get('/buku/{buku}','BukuController@show'); 
Route::put('/buku/update/{id}','BukuController@update');
Route::get('/buku/delete/{id}','BukuController@destroy'); 

// utk mlht satu buku scr detail

 