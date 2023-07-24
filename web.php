<?php

use src\config\Database;
use src\Controllers\UserController;
use src\core\Request;
use src\Router\Route;

Route::get('/support', [UserController::class, 'index']);
