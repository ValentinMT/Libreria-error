<?php

Route::get('/', function () {
    //return view('home');
    return view('website.index');
    //return "Usando Git"; //Cambio realizado para crear la versión 2.
});

Route::get('/tienda', function() {
	return view('website.tienda');
});

Route::get('/carrito', function() {
	return view('website.carrito');
});

Route::get('/acerca', function() {
	return view('website.acerca');
});

Route::get('/contacto', function() {
	return view('website.contacto');
});

Route::get('/acceder', function() {
	return view('website.acceder');
});

//Ruta para el formulario.
Route::post('/form', 'ambientesController@store');

//Manejo de controladores, es @index, porque este es el nombre del método.
Route::get('/controller', 'ambientesController@index');