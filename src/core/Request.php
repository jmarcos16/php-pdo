<?php

namespace src\core;

class Request
{
    public string $uri;
    public ?string $query;
    public string $method;

    public function __construct()
    {
        $this->uri = $this->uri();
        $this->query = $this->query();
        $this->method = $this->method();
    }



    public function uri(): string
    {
        return $_SERVER['REQUEST_URI'];
    }

    public function query(): string|null
    {
        return $_SERVER['QUERY_STRING'] ?? null;
    }

    public function method(): string
    {
        return $_SERVER['REQUEST_METHOD'];
    }

}
