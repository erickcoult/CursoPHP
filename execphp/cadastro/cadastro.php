<?php 
include('conexao.php');

if (isset($_POST['email']) || isset($_POST['senha'])) {
    if(strlen($_POST['email']) == 0){
        echo "Preencha seu E-mail";

    } else if(strlen($_POST['senha']) == 0){
        echo "Preebcha sua Senha";
    } else {
        
        $email = $mysqli->real_escape_string($_POST['email']);
        $senha =$mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha ='$senha'";
    }
}
?>
asdsa
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head> 
<body>
<h1>Cadastro</h1>
    <form action="" method="POST">
        <p>
            <label for="email">E-mail</label>
            <input type="text" name="email">
        </p>
        <p>
            <label for="senha">Senha</label>
            <input type="password" name="senha">
        </p>
        <button type="submit">Entrar</button>
    </form>

    <h1>Passo a passo para criar cadastro</h1>
    <ol>
        <li>Criar conexão com a tabela Cadastro</li>
        <li>Criar validação, se existem os campos email e senha</li>
        <li>Criar validação se os campos não estão vazios</li>
    </ol>
</body>
</html>
