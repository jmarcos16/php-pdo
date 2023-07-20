<?php

function request(): \src\core\Request
{
    return new \src\core\Request();
}


function collection(): stdClass
{
    return new stdClass();
}

function route(): \src\Router\Route
{
    return new \src\Router\Route();
}
