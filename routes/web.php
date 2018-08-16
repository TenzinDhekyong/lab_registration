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
    return view('project');
});

//Route::get('intervention-resizeImage',['as'=>'intervention.getresizeimage','uses'=>'FileController@getResizeImage']);
//Route::post('intervention-resizeImage',['as'=>'intervention.postresizeimage','uses'=>'FileController@postResizeImage']);

Route::get('/storedata/create','SubmitController@create');
Route::post('/storedata','SubmitController@store');

//Route::get('/file','FileController@create')->name('file');
//Route::post('/file','FileController@store')->name('file');
//Route::get('create','ImageController@create');
//Route::post('create','ImageController@store');
//Route::get('/uploadfile','UploadController@getView');