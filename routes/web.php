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
//    return view('index');
//});


//
//Route::get('astus',function(){
//	return view('stus.index');
//});
//
//Route::resource('stus','Admin\StuController');
//Auth::routes();
Route::group(['prefix'=>'/','namespace'=>'Home'],function(){
    Route::get('/', 'IndexController@Test');
    Route::get('/test', 'IndexController@Test');
    Route::post('/test1', 'IndexController@Test1');
});



