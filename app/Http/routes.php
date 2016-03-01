<?php

Route::get('/', function () {
    //return view('home');
    return "Usando Git"; //Cambio realizado para crear la versión 2.
});

//Ruta para el formulario.
Route::post('/form', 'ambientesController@show');

//Manejo de controladores, es @index, porque este es el nombre del método.
Route::get('/controller', 'ambientesController@index');