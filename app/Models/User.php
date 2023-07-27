<?php
namespace app\Models;

class User extends Model{

    protected $table = 'users';

    public function all() : self
    {
        $query = $this->connection->prepare("SELECT * FROM {$this->table}");
        $query->execute();
        
        $this->attributes = $query->fetchAll();
        return $this;

    }

}