<?php
namespace app\Models;


class Model{

    public function __construct()
    {       
    }


    public function connection(){
        getenv('DB_HOST');
    }
}


