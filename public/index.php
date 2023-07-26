<?php

use src\core\Router;
use src\core\Request;

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/web.php';


try {
    $value = new Router(new Request);

} catch (Exception $e) {
    exit($e->getMessage());
}
