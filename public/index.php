<?php

require '../vendor/autoload.php';
require '../routes/web.php';

use app\core\JsonResponse;
use app\core\Router;
use Symfony\Component\Dotenv\Dotenv;


$dontenv = new Dotenv();
$dontenv->load('../.env');

try {
    $value = new Router(request());
} catch (Exception $e) {
    json()->sendError($e->getMessage());
}