<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hola', function () {



$profesiones = ["odontologo","nutricionista","oculista","cardiologo"];


return view("doctores")->with("d",$profesiones);

});