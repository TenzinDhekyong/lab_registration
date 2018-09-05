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

Route::get('/feedback', function () {
    return view('test');
});



Route::get('/storedata/create','SubmitController@create');
//Route::post('/storedata/validate','SubmitController@validate');
Route::post('/storedata/store','SubmitController@store');
//Route::get('/storedata/validate','SubmitController@validate');


//Route::get('/storedata', 'ValidationController@validateform');


