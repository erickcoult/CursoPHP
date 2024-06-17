<?php 
include ('protectest.php');
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página inicial</title>
</head>
<body>
    <p>Bem vindo <?php echo $_SESSION['nome'];?></p>
    fazer <a href="logouteste.php">Logout</a>
</body>
</html>