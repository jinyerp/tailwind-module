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

Route::prefix('tailwind')->group(function() {
    Route::get('/', 'TailwindController@index');
});



Route::prefix('tailwind/navbar')->group(function() {
    Route::get('/exsample3', function(){
        return view('tailwind::navbar.exsample3');
    });
});
