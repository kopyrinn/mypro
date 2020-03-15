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

Route::get('/home',"AffairController@index");
 

Route::post('/create','AffairController@create'); 

Route::post('/update','AffairController@update'); 

Route::post('/delete','AffairController@destroy'); 

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
