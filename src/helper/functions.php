<?php

use src\core\Route;
use src\core\Request;

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
