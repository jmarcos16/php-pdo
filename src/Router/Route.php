<?php

namespace src\Router;

use Closure;

class Route
{
    private static array $routes = [];

    public static function add(string $route, array $config): void
    {
        self::$routes[$route] = $config;
    }

    public static function get(string $route, array $method): self
    {
        self::add($route, $method);
        return new self();
    }
}
