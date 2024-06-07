<?php 
include('conexao.php');

if(isset($_POST['submit'])){

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $tel = $_POST['tel'];
    $sexo = $_POST['sexo'];
    $data = $_POST['data'];
    $cidade = $_POST['cidade'];
    $endereco = $_POST['endereço'];

    $sql_query = mysqli_query($mysqli, "INSERT INTO usuarios (nome, email, senha, telefone, sexo, `data`, cidade, endereço) VALUES ('$nome', '$email', '$senha', '$tel', '$sexo', '$data', '$cidade', '$endereco')");
    
    if($sql_query) {
        echo "Registro inserido com sucesso!";
    } else {
        echo "Erro ao inserir registro: " . mysqli_error($mysqli);
    }
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
    <fieldset>
        <form action="cadastro.php" method="post">
            <div class="inputbox">
                <input type="text" name="nome" id="nome" required>
                <label for="nome">Nome</label>
            </div>

            <div class="inputbox">
                <input type="email" name="email" id="email" required>
                <label for="email">Email</label>
            </div>

            <div class="inputbox">
                <input type="password" name="senha" id="senha" required>
                <label for="senha">Senha</label>
            </div>

            <div class="inputbox">
                <input type="tel" name="tel" id="tel" required>
                <label for="tel">Telefone</label>
            </div>

            <div class="inputbox">
                <label for="sexo">Sexo:</label>
                <select id="sexo" name="sexo" required>
                    <option value="">Selecione</option>
                    <option value="masculino">Masculino</option>
                    <option value="feminino">Feminino</option>
                    <option value="outro">Outro</option>
                </select>
            </div>

            <div class="inputbox">
                <input type="date" name="data" id="data" required>
                <label for="data">Data de Nascimento</label>
            </div>

            <div class="inputbox">
                <input type="text" name="cidade" id="cidade" required>
                <label for="cidade">Cidade</label>
            </div>

            <div class="inputbox">
                <input type="text" name="endereço" id="endereço" required>
                <label for="endereço">Endereço</label>
            </div>

            <input type="submit" name="submit" value="Enviar">
        </form>
    </fieldset>
</body>
</html>
