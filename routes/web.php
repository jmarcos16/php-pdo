<?php

use app\Controllers\UserController;
use app\core\Route;


Route::get('/', [UserController::class, 'index']);