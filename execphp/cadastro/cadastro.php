<?php 
include('conexao.php')
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
<h1>Cadastro</h1>
    <form action="" method="post">
        <p>
            <label for="email">E-mail</label>
            <input type="text" name="email" id="">
        </p>
        <p>
            <label for="password">Senha</label>
            <input type="password" name="password" id="">
        </p>
        <button type="submit">Entrar</button>
    </form>
</body>
</html>