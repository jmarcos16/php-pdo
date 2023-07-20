<?php

use src\core\Request;
use src\Router\Route;

Route::get('/support', [Request::class, 'support']);
Route::get('/support', [Request::class, 'index']);
Route::get('/', [Request::class, 'index']);
