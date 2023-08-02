<?php
namespace app\Models;

class User extends Model{

    protected $table = 'users';


    public function find(int $id) : array
    {
        $query = $this->connection->prepare("SELECT * FROM {$this->table} WHERE id = :id");
        $query->execute(['id' => $id]);
        return $query->fetch();
    }

    public function create(array $data) : bool
    {
        $query = $this->connection->prepare("INSERT INTO {$this->table} (name, email, password) VALUES (:name, :email, :password)");
        return $query->execute($data);
    }

    public function update(int $id, array $data) : bool
    {
        $query = $this->connection->prepare("UPDATE {$this->table} SET name = :name, email = :email, password = :password WHERE id = :id");
        return $query->execute($data);
    }

    public function delete(int $id) : bool
    {
        $query = $this->connection->prepare("DELETE FROM {$this->table} WHERE id = :id");
        return $query->execute(['id' => $id]);
    }

}