<?php

use app\Controllers\UserController;
use app\core\Route;


Route::get('/user', [UserController::class, 'index']);
Route::get('/show', [UserController::class, 'show']);
Route::post('/create', [UserController::class, 'store']);
Route::put('/update', [UserController::class, 'update']);
Route::delete('/delete', [UserController::class, 'destroy']);