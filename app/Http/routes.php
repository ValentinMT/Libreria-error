<?php

Route::get('/', function () {
    return view('home');
});

//Ruta para el formulario.
Route::post('/form', 'ambientesController@show');

//Manejo de controladores, es @index, porque este es el nombre del método.
Route::get('/controller', 'ambientesController@index');