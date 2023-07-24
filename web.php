<?php

use src\config\Database;
use src\Controllers\UserController;
use src\core\Request;
use src\Router\Route;

// Route::get('/support', [Request::class, 'support']);
Route::get('/support', [UserController::class, 'index']);
// Route::get('/', [Request::class, 'index']);
