<?php


Route::get('/', function () {
    return view('welcome');
});


Route::get('/about', function () {
    return view('about');
});

Route::middleware(['auth'])->group(function(){
Route::get('/dashboard', 'DashboardController@index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
