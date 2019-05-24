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
    return view('index');
});


Route::get('/contact', function () {
    return view('contact');
});

Route::get('/harga', function () {
    return view('harga');
})->name('harga');

Auth::routes();

Route::group(['middleware'=>['auth','user']],function(){
    Route::get('/upload', 'UploadController@upload');
    Route::post('/upload/proses', 'UploadController@kirimfile');
});
Route::group(['middleware'=>['auth','admin']],function(){
    
});

Route::get('/home', 'HomeController@index')->name('index');
