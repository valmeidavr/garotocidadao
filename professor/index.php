<?php 

session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: ../index.php");
    exit;
    }

$usuario = $_SESSION['usuario'];


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>Olá seja bem-vindo professor <?php echo $usuario['name']; ?> </h1>
    <a href="../logout.php">Sair</a>
</body>
</html>