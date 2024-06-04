<?php 
include('conexao.php');
 if(isset($_POST ['email']) || isset($_POST['senha'])) {

    if(strlen($_POST['email'] == 0)){
        echo "Preencha o e-mail";
    } else if (strlen($_POST['senha']) == 0){
        echo "Preencha sua senha";
    } else {
        $email = $mysqli -> real_escape_string($_POST['email']);
        $senha = $mysqli -> real_escape_string($_POST['senha']);
    }
 }
    $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
    $sql_query = $mysqli ->query($sql_code) or die("Falha na execução do código" . $mysqli -> error);

    $quantidade = $sql_query ->num_rows;

    if($quantidade ==1) {

        $usuario = $sql_query->fetch_assoc();

        if(!isset($_SESSION)) {
            session_start();
        }

        $_SESSION['id'] = $usuario['id'];
        $_SESSION['nome'] = $usuario['nome'];
        
        header("location: painel.php");

    } else{
        echo "Falha ao logar! E-mail ou senhas incorretos";
    }
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

    <h1>Passo a passo pra criar cadastro</h1>
    <ol>
        <li>Criar conexão com a tabela Cadastro </li>
        <li>Criar validação se existe os campos email e senha</li>
        <li>Criar validação se os campos não estão vazios</li>
        <li></li>
    </ol>
</body>
</html>