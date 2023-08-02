<?php
namespace app\Controllers;

use app\core\Request;
use app\Models\User;

class UserController extends Controller{

    public function index(){
        $user = new User;
        $users = $user->all();

        dd(
            $users
        );

       json()->send($users);
    }

    public function show(){
        $user =  [ 
            'name'      => 'John Doe',
            'email'     => 'test@gmail.com',
            'password'  => '123456'
        ];
        json()->send($user);
    }
    
}