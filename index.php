<?php
require __DIR__ . '/vendor/autoload.php';

include 'views/user.php';

use src\config\Database;

$conn = new Database('localhost', 'test', 'root', '');

$sql = 'CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
)';


$conn->connection()->exec($sql);


$sql = 'INSERT INTO users (name, email, password) VALUES (:name, :email, :password)';

$stmt = $conn->connection()->prepare($sql);

$stmt->bindValue(':name', 'John Doe');
$stmt->bindValue(':email', 'jose@test');
$stmt->bindValue(':password', password_hash('123456', PASSWORD_BCRYPT));

try {
    $stmt->execute();
    echo 'User created successfully';
} catch (\PDOException $e) {
    echo $e->getMessage();
}
