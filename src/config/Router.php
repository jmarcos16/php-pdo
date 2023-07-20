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
        $this->uri = request()->uri();
        $this->method = request()->method();
        $this->validetedUri()->resolveController();
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

    public function resolveController(): Router
    {
        $uri = request()->uri();
        $uri = explode('?', $uri)[0];

        foreach(Route::$route as $route) {
            if($route['uri'] === $uri && $route['method'] === request()->method()) {
                if(class_exists($route['action'][0])) {
                    $this->controller = $route['action'][0];

                    if(method_exists($this->controller, $route['action'][1])) {
                        $this->action = $route['action'][1];
                        return $this;
                    }

                    throw new \InvalidArgumentException('Method not found');
                }

                throw new \InvalidArgumentException('Controller not found');
            }
        }

        throw new \InvalidArgumentException('Route not found');
    }

}
