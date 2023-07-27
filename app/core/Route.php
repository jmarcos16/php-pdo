<?php

namespace app\core;

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

    public static function post(string $uri, array $action): self
    {
        return self::add('POST', $uri, $action);
    }

    public static function put(string $uri, array $action): self
    {
        return self::add('PUT', $uri, $action);
    }

    public static function delete(string $uri, array $action): self
    {
        return self::add('DELETE', $uri, $action);
    }

}
