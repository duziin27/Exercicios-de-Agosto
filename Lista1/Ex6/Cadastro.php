<?php
include("Config.php");
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = $_POST["fnome"];
    $email = $_POST["femail"];
    $password = $_POST["fsenha"];
    
    //conexão com o banco
    $conexao = new mysqli(HOST, USER, PASSWORD, DB);
    if ($conexao->connect_error) {
        die("Conexão Falhou: " . $conexao->connect_error);
    }

    //cadastro de usuarios
    $sql_cadastro = "INSERT INTO clientes (nome, email, senha) VALUES ('$nome', '$email', '$password')";
    if ($conexao->query($sql_cadastro) == 1) {
        echo "O cadastro foi realizada com sucesso! ";
    } else {
        echo "Erro ao efetuar o cadastro: " . $conexao->error;
    }

    $conexao->close();
}

?>

<a href="Login.html">Fazer o Login</a>