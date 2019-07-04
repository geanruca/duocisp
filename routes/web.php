<?php

Route::get('/', function () {
    return view('welcome');
});
Route::get('/clientes', function(){
    return view('clientes');
});
Route::get('/intranet', function(){
    return view('intranet');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
