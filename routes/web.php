<?php

Route::get('/', function () {
    return view('welcome');
});
Route::get('/clientes', function(){
    return view('clientes');
});

Route::get('registro','PagesController@registro');
Route::get('registro/particulares','PagesController@registro_de_particulares');
Route::get('registro/empresas','PagesController@registro_de_empresas');

Route::get('/intranet', function(){
    return view('intranet');
});

Route::get('/home', 'HomeController@index')->name('home');
