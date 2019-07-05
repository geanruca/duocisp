<?php

Route::get('/', 'PagesController@inicio');
// Route::get('registro','PagesController@registro');

// Lista de CRUD
Route::get('tipos_analisis','PagesController@tipos_analisis');
Route::get('empleados','PagesController@empleados');
Route::apiResource('tipos_analisis/index','TiposAnalisisController');
Route::apiResource('empleados/index','EmpleadoController');
// 

Route::get('resultados','PagesController@resultados');
Route::get('analisis','PagesController@analisis');



Route::apiResource('cliente/index','ClienteController');
Route::apiResource('analisis/index','AnalisisController');


Route::get('registro/particular','PagesController@registro_particular');
Route::get('registro/empresa','PagesController@registro_empresa');

// Route::get('registro/particular','PagesController@registro_particular');
// Route::get('registro/empresa','PagesController@registro_empresa');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

