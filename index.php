<?php

use src\core\Router;
use src\core\Request;

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/web.php';


$value = new Router(new Request);
