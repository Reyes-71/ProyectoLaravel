<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/equipo', function () {
    return '<h1> devolucion de los equipos </h1>';
});

Route::get('/equipo/{id}', function($identificador){
    return '<h1>Equipo </h1>'.$identificador;
});

Route::get('/equipo/{id}/comentario/{comment}', function($id, $comentario){
    return 'Equipo '.$id.', Excelente Trabajo '.$comentario;
});


Route::get('/usuario/{nombre?}', function($nombre = 'Reyes'){
    return '<h1>Nombre </h1>'.$nombre;
});