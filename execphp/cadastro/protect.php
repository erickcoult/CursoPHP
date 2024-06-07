<?php 

if(!isset ($_SESSION)){
    session_start();
}

if(!isset($_SESSION['id'])){
    die("Você não está logado! <a href=\"login.php\">Entrar</a>");
}
?>
