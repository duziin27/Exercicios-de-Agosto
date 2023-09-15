<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
    (Opção de seleção em teste)
        <select name="opcoes" id="">
            
            <option value="todos">Todos</option>
            <option value="estoquista">Estoquista</option>
            <option value="programador">Programador</option>
            <option value="infraestrutura">Infraestrutura</option>
            <option value="gerente">Gerente</option>
        </select>
    </form>
</body>

</html>

<?php

/*
 3 - Dada a tabela "funcionarios" com os campos "id_funcionario",
"nome" e "cargo", escreva uma consulta para selecionar todos os
funcionários que tenham o cargo de "Gerente"
*/

//conexão ao banco
require_once('./Config.php');

//criando a tabela

/*
$sql_clientes = "CREATE TABLE agosto.funcionarios(
    id_funcionario INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    cargo VARCHAR(255) NOT NULL
)";
if ($conexao->query($sql_clientes)){
    echo "Tabela foi criada";
} else {
    echo "Nenhuma tabela criada";
}
*/

//inserindo dados

/*
$inserir_clientes = "INSERT INTO agosto.funcionarios VALUES ('', 'Juninho Smith', 'Estoquista'), ('', 'Eduardo Corrêa', 'Programador'), ('', 'Diogo Manzoli', 'Programador'), ('', 'Adão Correia', 'Infraestrutura'), ('', 'Genivan Alves', 'Infraestrutura'), ('', 'Hiago De Jesus', 'Programador'), ('', 'Gabriel Magnago', 'Gerente')";
if($conexao->query($inserir_clientes)){
    echo "Os dados foram inseridos com sucesso!";
} else {
    echo "Nenhum dado foi inserido";
}
*/


$sql = "SELECT id_funcionario, nome, cargo FROM funcionarios WHERE cargo = 'Gerente'";
$clientes = $conexao->query($sql);

while ($lista = $clientes->fetch_assoc()) {
    echo $lista['nome'];
    echo " ";
    echo "- " . $lista['cargo'];
    echo "<br>";
}






?>