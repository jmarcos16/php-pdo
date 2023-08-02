<?php
namespace app\Controllers;

use app\core\Request;
use app\Models\User;

class UserController extends Controller{

    public function index(Request $request){
        $user = new User();
        $users = $user->all();
        return $this->view('user', ['users' => $users]);

    }
    
}