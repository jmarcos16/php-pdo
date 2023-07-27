<?php

namespace app\core;

use InvalidArgumentException;

class Router
{

    private string $uri;
    private string $method;
    private string $controller;
    private string $action;
    private array $route;

    public function __construct(Request $request)
    {
        $this->uri = explode('?', $request->uri())[0];
        $this->method = $request->method();
        $this->route = $this->validateRoute();
        $this->controller = $this->resolveController();
        $this->action = $this->resolveAction();
    }


    public function validateRoute() : array|InvalidArgumentException
    {
        $route = array_filter(Route::$route, function ($route) {
            return $route['uri'] === $this->uri && $route['method'] === $this->method;
        });

        return $route ? $this->route = $route : throw new InvalidArgumentException('Route not found');
    }


    /**
     *  Resolve url and return controller and method
     */

    public function resolveController(): string|InvalidArgumentException
    {

        $controller = reset($this->route[array_key_first($this->route)]['action']);

        if(class_exists($controller)) {
            return $this->controller = $controller;
        }

        throw new InvalidArgumentException($this->controller . ' not found');
                
    }

    public function resolveAction() : string|InvalidArgumentException
    {

        $action = end($this->route[array_key_first($this->route)]['action']);

        if(method_exists($this->controller, $action)) {
            (new $this->controller)->$action();
            return $this->action = $action;
        }

        throw new InvalidArgumentException($this->action . ' not found in ' . $this->controller . ' class');
    }

}
