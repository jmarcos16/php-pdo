<?php

use app\core\Route;
use app\core\Request;
use app\core\JsonResponse;

function request(?string $key = null): Request|string|array|null
{
    if(is_null($key)){
        return new Request;
    }

    return (new Request)->__get($key);
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
