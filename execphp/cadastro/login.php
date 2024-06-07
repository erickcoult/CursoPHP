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
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução" . $mysqli->error);

        $quantidade = $sql_query->num_rows;
        if($quantidade == 1) {
            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)){
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            header("Location: painel.php");

        } else{
            echo "Falha ao logar!";
        }
    }
}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head> 
<body>
<h1>Login</h1>
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
    <p>Ou pode se <a href="cadastro.php">cadastrar</a> aqui</p>

    <h1>Passo a passo para criar cadastro</h1>
    <ol>
        <li>Criar conexão com a tabela Cadastro</li>
        <li>Criar validação se existem os campos email e senha</li>
        <li>Criar validação se os campos não estão vazios</li>
        <li>Criar proteção contra SQL Injector</li>
        <li>Selecionar as colunas</li>
        <li>Fazer a consulta</li>
        <li>Verificar se existe aquele cadastro</li>
        <li>Guardar os dados dentro de uma string</li>
        <li>Criar uma nova sessão</li>
        <li>Iniciar a sessão com id e nome</li>
        <li>Redirecionar o usuário para a página principal após o login</li>
        <li>Não permitir que o usuário acesse a página principal sem estar logado</li>
        <li>Criar página que matará a sessão (logout)</li>

    </ol>
</body>
</html>
