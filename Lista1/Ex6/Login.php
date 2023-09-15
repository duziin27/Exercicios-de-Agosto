<?php 
if ($_SERVER["REQUEST_METHOD"] === "POST"){
    $email = $_POST["email"];
    $pass = $_POST["senha"];

    $nome_servidor = "localhost";
    $nome_usuario = "root";
    $senha = "";
    $nome_BD = "testedoex";
    
    //conexão ao banco
    $conexao = new mysqli ($nome_servidor, $nome_usuario, $senha, $nome_BD);
    if ($conexao->connect_error) {
        die("Conexao Falhou: " .$conexao->connect_error);
    }

    //criando minha consulta - pegar o valor de dentro db
    $sql_consulta = "SELECT * FROM clientes WHERE email = '$email' AND senha = '$pass'";
    $resultado = $conexao->query($sql_consulta);
    
    //verificando as possibilidades dos resultados
    if ($resultado->num_rows === 1) {
        $lista = $resultado->fetch_assoc();
        //verificação de senha
        if ($pass === $lista["senha"]) {
            echo "Logado com sucesso";
        } else{
            echo "Senha incorreta, tente novamente! ";
        }
    } else {
        echo "Usuario não encontrado, faça o cadastro!";
    }


    //finalizando a conexao
    $conexao->close();

}
