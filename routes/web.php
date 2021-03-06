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
    return view('posts');
});

Route::get('/add', function () {
    return view('add');
});

Route::get('/post/{id}', function ($id) {
    return view('post')->with('id', $id);
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/tags/{id}', function ($id) {
    return view('tags')->with('id', $id);
});
