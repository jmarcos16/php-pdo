<?php
namespace app\Controllers;

use app\core\Request;
use app\Models\User;

class UserController extends Controller{

    public function index(Request $request){
        
        return json()->send($request);
    }
    
}