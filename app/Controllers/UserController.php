<?php
namespace app\Controllers;

use app\core\JsonResponse;

class UserController extends Controller{



    public function index(){
        

        return json()->send([
            'message' => 'not found'
        ], 404);
    }
    
}