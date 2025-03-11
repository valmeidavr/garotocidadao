<?php
session_start();

if (isset($_SESSION['usuario'])) {
    header("Location: dashboard.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autenticação</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <form action="login.php" method="POST">
        <label>Entre com e-mail</label>
        <input type="email" name="email" placeholder="E-mail" required>

        <label>Digite sua senha</label>
        <input type="password" name="password" placeholder="Senha" required>

        <button type="submit">Entrar</button>

        <a href="cadastro.php">Cadastre-se</a>
        <a href="recuperar.php">Recuperar senha</a>
    </form>
</body>

</html>