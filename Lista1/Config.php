<?php
$hostname = 'localhost';
$user = 'root';
$senha = '';
$db = 'agosto';

$conexao = new mysqli($hostname, $user, $senha, $db);
if ($conexao->connect_error) {
    die("Conexão Falhou: " . $conexao->connect_error);
}

?>