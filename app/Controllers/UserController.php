<?php
namespace app\Controllers;

use app\core\Request;
use app\Models\User;

class UserController extends Controller{

    public function index(){
        
        $users = (new User())->all();
        json()->send($users);

    }

    public function show(){
        
        $id = request()->get('id');

        $user = (new User())->find($id);
        json()->send($user);

    }

    public function store(){
        
        $name = request('name');
        $email = request('email');
        $password = request('password');

        $user = (new User())->create([
            'name' => $name,
            'email' => $email,
            'password' => password_hash($password, PASSWORD_BCRYPT)
        ]);

        json()->send($user);

    }

    public function update(){
        
        $id = request('id');
        $name = request('name');
        $email = request('email');
        $password = request('password');
        
        $user = (new User())->update($id, [
            'name' => $name,
            'email' => $email,
            'password' => password_hash($password, PASSWORD_BCRYPT)
        ]);

        json()->send($user);

    }

    public function destroy(){
        
        $id = request('id');

        $user = (new User())->delete($id);

        json()->send($user);

    }
    
}