<?php
namespace app\Controllers;

use app\core\Request;
use app\Models\User;

class UserController extends Controller{

    public function index(Request $request){


        dd(request());
        dd(request('name'));
        return json()->send([
            'users' => $request
        ]);
    }
    
}