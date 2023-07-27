<?php

require '../vendor/autoload.php';
require '../routes/web.php';

use app\core\Router;
use Symfony\Component\Dotenv\Dotenv;

$dontenv = new Dotenv();
$dontenv->load('../.env');

try {
    $value = new Router(request());

} catch (Exception $e) {
    exit($e->getMessage());
}
