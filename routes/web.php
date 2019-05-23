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



Route::get('astus',function(){
	return view('stus.index');
});

Route::resource('stus','Admin\StuController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



