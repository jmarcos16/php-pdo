<?php

use app\core\Route;
use app\core\Request;
use app\core\JsonResponse;

function request(): Request
{
    return new Request;
}


function collection(): stdClass
{
    return new stdClass();
}

function route(): Route
{
    return new Route;
}


if(!function_exists('json')){

    function json(){
        return new JsonResponse;
    }

}
