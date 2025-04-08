<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome to mobiile legends');
});

Route::get('/hola', function () {
    return "welcome to mobiile legends";
});