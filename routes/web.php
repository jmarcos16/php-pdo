<?php

use app\Controllers\UserController;
use app\core\Route;


Route::get('/user', [UserController::class, 'index']);
Route::get('/user/show', [UserController::class, 'show']);