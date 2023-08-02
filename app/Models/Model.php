<?php
namespace app\Models;

use PDO;
use PDOException;

class Model{

    protected $connection;
    protected $host;
    protected $port;
    protected $database;
    protected $username;
    protected $password;
    protected array $attributes;


    public function __construct()
    {       
        $this->host = $_ENV['DB_HOST'];
        $this->port = $_ENV['DB_PORT'];
        $this->database = $_ENV['DB_DATABASE'];
        $this->username = $_ENV['DB_USERNAME'];
        $this->password = $_ENV['DB_PASSWORD'];
        $this->connection();
    }


    public function connection()
    {
        try{
            
            $this->connection = new PDO(
                "mysql:host={$this->host};port={$this->port};dbname={$this->database}", 
                $this->username, $this->password
            );
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $this;


        }catch(PDOException $e){
            throw new PDOException($e->getMessage(), 502);
        }
                        
    }

    public function all()
    {
        $query = "SELECT * FROM {$this->table}";
        dd($query);
        // $query->execute();
        // return $query->fetchAll();
    }

}


