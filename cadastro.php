<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Usuário</title>
</head>
<body>
    <form method="POST" action="cadastro_salvar.php">
        <label>Nome</label>
        <input type="text" name="name" placeholder="Nome" required>

        <label>E-mail</label>
        <input type="email" name="email" placeholder="E-mail" required>

        <label>Senha</label>
        <input type="password" name="password" placeholder="Senha" required>

        <label>Perfil do Usuário</label>
        <select required name="profile">
            <option value='' selected>Selecione</option>
            <option value="Professor">Professor</option>
            <option value="Aluno">Aluno</option>
        </select>


        <button type="submit">Cadastrar</button>

        <a href="index.php">Entrar</a>

    </form>
</body>
</html>