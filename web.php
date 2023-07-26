<?php

use src\Controllers\UserController;
use src\core\Route;

Route::get('/', [UserController::class, 'index']);
Route::post('/user', [UserController::class, 'store']);
