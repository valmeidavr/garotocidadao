<?php 

require './db.php';


if(!isset($_POST['name']) || !isset($_POST['email']) || !isset($_POST['password']) || !isset($_POST['profile'])) {
    echo "<script>alert('Preencha todos os campos'); window.location.href = 'cadastro.php';</script>";
    exit;
}

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$profile = $_POST['profile'];

try {
    $stmt = $pdo->prepare("INSERT INTO users (name, email, password, profile) VALUES (:name, :email, :password, :profile)");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);
    $stmt->bindParam(':profile', $profile);

    if ($stmt->execute()) {
        echo "<script>alert('Usuário cadastrado com sucesso'); window.location.href = 'index.php';</script>";
    } else {
        echo "<script>alert('Erro ao cadastrar usuário'); window.location.href = 'cadastro.php';</script>";
    }

} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}



?>