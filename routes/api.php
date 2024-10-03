<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function () {
    return 'User List';
});

Route::get('/user', function () {
    return 'Lista de usuarios';
});

Route::get('/user/{id}', function () {
    return 'Usario obtenido';
});

Route::post('/user', function () {
    return 'Creando usuario';
});

Route::put('/user/{id}', function () {
    return 'Actualizando usuario';
});

Route::delete('/user/{id}', function () {
    return 'Eliminando usuario';
});
