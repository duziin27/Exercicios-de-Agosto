<?php

$hostname = 'localhost';
$password = null;
$username = 'root';
$dbname = 'blog';

$conexao = new mysqli($hostname,$username,$password,$dbname);

/*
$criadb = "CREATE DATABASE blog";
if($conexao->query($criadb)){
    echo "Banco criado com sucesso";
} else{
    echo $conexao->error;
}
*/

/*
$criatabela = "CREATE TABLE blog.comentarios(
    nome VARCHAR(50),
    comentario TEXT
    )";
if($conexao->query($criatabela)){
    echo "Banco criado com sucesso";
} else{
    echo $conexao->error;
}
*/


if (isset($_POST['submit']) and !empty($_POST['name']) and !empty($_POST['comments'])) {

    $nome = $_POST['name'];
    $comentario = $_POST['comments'];

    $sql_insert = "INSERT INTO comentarios VALUES('$nome', '$comentario')";
    header('location:Ex4.php');
}



?>
