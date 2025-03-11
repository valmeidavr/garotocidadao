<?php

$host = '92.118.58.75';
$dbname = 'garotocidadao';
$username = 'root';
$password = 'Q7jrdhh6dg*()';

try {
    $pdo = new PDO(
        "mysql:host=$host;dbname=$dbname",
        $username,
        $password
    );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro de conexão: " . $e->getMessage());
}
