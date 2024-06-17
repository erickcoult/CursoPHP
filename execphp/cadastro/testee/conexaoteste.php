<?php 
$host = 'localhost';
$usuario ='root';
$senha ='';
$database ='cadastroteste';

$mysqli = new mysqli($host, $usuario, $senha, $database);

if($mysqli->error){
    die ("Conexão falhou" . $mysqli->error);
}


?>