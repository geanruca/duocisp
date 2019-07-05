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
Route::get('/loginE', function(){
    return view('loginE');
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('registro/particulares','PagesController@registro_de_particulares');
Route::get('registro/empresas','PagesController@registro_de_empresas');

Route::get('/muestras',function(){
    return view('muestra');
});