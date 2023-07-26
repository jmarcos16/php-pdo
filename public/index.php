<?php

use src\core\Router;
use src\core\Request;

require __DIR__ . '../vendor/autoload.php';
require __DIR__ . '../routes/web.php';


try {
    $value = new Router(request());

} catch (Exception $e) {
    exit($e->getMessage());
}
