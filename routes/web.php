<?php

Route::get('/', 'PagesController@inicio');
Route::get('registro','PagesController@registro');

// Lista de CRUD
Route::get('tipos_analisis','PagesController@tipos_analisis');
Route::apiResource('tipos_analisis/index','TiposAnalisisController');

Route::get('registro/particular','PagesController@registro_particular');
Route::get('registro/empresa','PagesController@registro_empresa');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

