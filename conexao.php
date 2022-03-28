<?php
$hostname = "localhost";
$bancodedados = "trabalho";
$usuario = "root";
$senha = "";

$mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);
if($mysqli->connect_errno){
    echo "<script language='javascript' type='text/javascript'>
    alert('Erro em conectar com o banco...');
    window.location.href='teste1.php';
    </script>";
}

?>