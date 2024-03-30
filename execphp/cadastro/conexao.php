<?php 
$host = 'localhost';
$usuario = 'root';
$senha = '';
$database ='cadastrologin';

$mysqli = new mysqli($host, $usuario, $senha, $database);

if ($mysqli->error){
    die("Conexão falhou com o banco de dados:" . $mysqli->error);
}
?>