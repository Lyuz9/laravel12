<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    //return view('welcome');
    return "Hola desde la página de inicio";
});

/*
Route::get('/contacto', function(){
    return "Hola desde contactos usando get";
});

Route::post('/contacto', function(){
    return "Hola desde contactos usando post";
});
*/

Route::match(['get', 'post'], '/contacto', function(){
    return "Hola desde la página de contacto usando el metodo get o post";
});
