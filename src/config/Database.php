<?php

namespace src\config;

class Database
{
    public function __construct(
        private string $host,
        private string $database,
        private string $user,
        private string $password
    ) {
        $this->host     = $host;
        $this->database = $database;
        $this->user     = $user;
        $this->password = $password;
    }

    public function connection()
    {
        try {
            $dns = "mysql:host={$this->host};dbname={$this->database}";
            return new \PDO($dns, $this->user, $this->password);
        } catch (\PDOException $e) {
            throw new \PDOException($e->getMessage(), $e->getCode());
        }
    }
}
