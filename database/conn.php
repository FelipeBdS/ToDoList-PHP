<?php

require_once(__DIR__ . '/../config.php');

$dsn = "pgsql:host=" . $_ENV['DB_HOST'] . ";dbname=" . $_ENV['DB_NAME'];
$username = $_ENV['DB_USER'];
$password = $_ENV['DB_PASS'];

try {
    $pdo = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
    echo "Erro de conexão: ";
    die($e->getMessage());
}
