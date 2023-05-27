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
//    return view('welcome');
//});

//Auth::routes();
//
//Route::get('/home', 'HomeController@index')->name('home');

Route::namespace('Site')->name('site.')->group(function (){
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('category/{id}', 'CategoryController@index')->name('category');
});
