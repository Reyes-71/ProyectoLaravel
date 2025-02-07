<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/club', function () {
    return '<h1> Hola mundo </h1>';
});