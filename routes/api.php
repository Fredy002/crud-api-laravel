<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\userController;

Route::get('/user', [userController::class, 'index']);


Route::get('/user/{id}', [userController::class, 'show']);

Route::post('/user', [userController::class, 'store']);

Route::put('/user/{id}', [userController::class, 'update']);

Route::patch('/user/{id}', [userController::class, 'updatePartial']);

Route::delete('/user/{id}', [userController::class, 'destroy']);
