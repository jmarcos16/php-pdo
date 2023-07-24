<?php

use src\Controllers\UserController;
use src\Router\Route;

Route::get('/', [UserController::class, 'index']);
