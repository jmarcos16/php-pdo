<?php

namespace src\Controllers;

class UserController
{
    public function index()
    {
        print_r(['Hello World' => 'Hello World']);
    }


    public function store()
    {
        dd(request()->get('permission'));
        dd($_SERVER, $_POST);
    }
}
