<?php

use Whoops\Run;
use src\Router\Route;
use src\config\Router;
use Whoops\Handler\PrettyPageHandler;

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/web.php';


$value = new Router();

// dd($value);
