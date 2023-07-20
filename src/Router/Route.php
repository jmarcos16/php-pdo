<?php

namespace src\Router;

class Route
{
    public static array $route = [];
    
    public static function add(string $method, string $uri, array $action): self
    {
        array_push(self::$route, ['method' => $method,'uri' => $uri,'action' => $action]);
        return new self();
    }

    public static function get(string $uri, array $action): self
    {
        return self::add('GET', $uri, $action);
    }

}
