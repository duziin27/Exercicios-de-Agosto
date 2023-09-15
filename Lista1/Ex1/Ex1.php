
<?php
/*
1 - Dada a tabela "clientes" com os campos "id_cliente", "nome" e
"idade", escreva uma consulta para selecionar todos os clientes
com idade acima de 30 anos.
*/

//conexão ao banco
require_once('../Config.php');

//criando o banco das atividades de agosto
/*
$criar_banco = "CREATE DATABASE agosto";
if ($conexao->query($criar_banco) == 1){
    echo "Tabela foi criada";
} else {
    echo "Nenhuma tabela criada";
}
*/

//criando a tabela
/*
$sql_clientes = "CREATE TABLE agosto.clientes(
    id_cliente INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(50) NOT NULL,
    idade INT(3) NOT NULL
)";
if ($conexao->query($sql_clientes)){
    echo "Tabela foi criada";
} else {
    echo "Nenhuma tabela criada";
}
*/

//inserindo dados
/*
$inserir_clientes = "INSERT INTO agosto.clientes VALUES (1, 'Juninho Smith', 25), (2, 'Eduardo Corrêa', 20), (3, 'Diogo Manzoli', 35), (4, 'Adão Correia', 52), (5, 'Genivan Alves', 34), (6, 'Hiago De Jesus', 20), (7, 'Gabriel Magnago', 92)";
if($conexao->query($inserir_clientes)){
    echo "Os dados foram inseridos com sucesso!";
} else {
    echo "Nenhum dado foi inserido";
}
*/


$inputnome = $_POST['nome'] ?? "";
$inputidade = $_POST['idade'] ?? "";

if(isset($_POST['submit'])){
    $inserir_clientes = "INSERT INTO agosto.clientes VALUES ('', '$inputnome', '$inputidade')";
if($conexao->query($inserir_clientes)){
    echo "Os dados foram inseridos com sucesso!";
} else {
    echo "Nenhum dado foi inserido";
}
}

//selecionando nomes acima de 33 sem input
/*
$selecionador = "SELECT * FROM clientes WHERE idade >= 33";
$clientes = $conexao->query($selecionador);

while($lista = $clientes->fetch_assoc()){
    echo $lista['nome'];
    echo "";
    echo $lista['idade'];
    echo "<br>";
}
*/


//selecionando por idade com input
if(isset($_POST['submit2'])){
    $idade = $_POST['idade2'];
    $selecionador = "SELECT * FROM clientes WHERE idade >= $idade";

    $clientes = $conexao->query($selecionador);
    
    while($lista = $clientes->fetch_assoc()){
        echo $lista['nome'];
        echo " ";
        echo $lista['idade'];
        echo "<br>";
    }
}

?>
