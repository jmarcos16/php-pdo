<?php

namespace src\config;

use InvalidArgumentException;
use src\Router\Route;

class Router
{

    private array $aceptMethod = ['GET', 'POST', 'PUT', 'DELETE'];

    private string $uri;
    private string $method;
    private string $controller;
    private string $action;


    public function __construct()
    {
        $this->uri = explode('?', request()->uri())[0];
        $this->method = request()->method();
        $this->validetedUri()->resolveController()->resolveAction();
    }


    public function validetedUri() : Router|InvalidArgumentException
    {

        $uri = explode('?', $this->uri)[0];

        $validateRoute = array_filter(Route::$route, function ($route) use ($uri) {
            return $route['uri'] === $uri && $route['method'] === $this->method;
        });

        return $validateRoute ? $this : throw new InvalidArgumentException('Route not found');
    }

    /**
     *  Resolve url and return controller and method
     */

    public function resolveController(): Router|InvalidArgumentException
    {

        $route = array_filter(Route::$route, function ($route) {
            return $route['uri'] === $this->uri && $route['method'] === $this->method;
        });

        $controller = reset($route[array_key_first($route)]['action']);

        if(class_exists($controller)) {
            $this->controller = $controller;
            return $this;
        }

        throw new InvalidArgumentException($controller . ' not found');
                
    }

    public function resolveAction() : Router|InvalidArgumentException
    {

        $route = array_filter(Route::$route, function ($route) {
            return $route['uri'] === $this->uri && $route['method'] === $this->method;
        });

        $action = end($route[array_key_first($route)]['action']);


        if(method_exists($this->controller, $action)) {
            (new $this->controller)->$action();
            $this->action = $action;
            return $this;
        }

        throw new InvalidArgumentException($action . ' not found in ' . $this->controller . ' class');
    }

}
