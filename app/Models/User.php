<?php
namespace app\Models;

class User extends Model{

    protected $table = 'users';

    public function all() : array
    {
        $query = $this->connection->prepare("SELECT * FROM {$this->table}");
        $query->execute();
        return $query->fetchAll();
    }

}