<?php 
include ('conexaoteste.php');

if(isset ($_POST['email']) || isset($_POST['senha'])){
    if(strlen($_POST['email']) == 0){
        echo 'preencha o email.';
    } else if (strlen($_POST['senha']) == 0){
        echo 'preencha a senha.';
    } else{
        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM usuariosteste WHERE email ='$email' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução" . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1){

            $usuarioteste = $sql_query->fetch_assoc();

            if(!isset ($_SESSION)){
                session_start();
            }

            $_SESSION['id'] = $usuarioteste['id'];
            $_SESSION['nome'] = $usuarioteste['nome'];

            header("Location: painelteste.php");

        } else{
            echo 'Falha ao logar. Email ou senha incorretos.';
        }

    }


}


?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logonteste</title>
</head>
<body>
    <h1>Login</h1>
    <form action="" method="post">

    <label for="email">Email</label>
    <input type="text" name="email" id="">

    <label for="senha">Senha</label>
    <input type="password" name="senha" id="">

    <button type="submit">Enviar</button>


    </form>
</body>
</html>