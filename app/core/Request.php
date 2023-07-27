<?php

namespace app\core;

class Request
{
    public string $uri;
    public ?string $query;
    public string $method;
    public ?array $attributes = [];

    public function __construct()
    {
        $this->uri = $this->uri();
        $this->query = $this->query();
        $this->method = $this->method();
        $this->setAttributes();
    }

    public function uri(): string
    {
        return explode('?', $_SERVER['REQUEST_URI'])[0];
    }

    public function query(): string|null
    {
        return $_SERVER['QUERY_STRING'] ?? null;
    }

    public function method(): string
    {
        return $_SERVER['REQUEST_METHOD'];
    }

    public function get(string $key): mixed
    {
        return $this->attributes[$key] ?? null;
    }

    public function __get($name)
    {
        return $this->get($name);
    }

    public function setAttributes()
    {
        
        if($this->method === 'POST'){
            $this->attributes = $_POST;
        }

        if($this->method === 'GET'){
            $this->attributes = $_GET;
        }

    }

}
