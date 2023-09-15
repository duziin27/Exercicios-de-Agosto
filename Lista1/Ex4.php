<?php
/*
4-Dada a tabela "pedidos" com os campos "id_pedido", "data", "valor" e "status", escreva uma consulta para selecionar todos os
pedidos que tenham sido realizados em 2023.

*/

require_once('./Config.php');

/*
$sql_clientes = "CREATE TABLE agosto.pedidos(
    id_pedido INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    data VARCHAR(50) NOT NULL,
    valor INT(50) NOT NULL,
    estado VARCHAR(50) NOT NULL
)";
if ($conexao->query($sql_clientes)){
    echo "Tabela foi criada";
} else {
    echo "Nenhuma tabela criada";
}
*/

/*
$inserindo_dados = "INSERT INTO agosto.pedidos VALUES ('', 2023, 250, 'Finalizado'), ('', 2024, 550, 'Finalizado'), ('', 2022, 150, 'Em andamento'), ('', 2023, 490, 'Em andamento'), ('', 2022, 50, 'Finalizado')";
if ($conexao->query($inserindo_dados)){
    echo "Os dados foram inseridos";
} else {
    echo "Nenhuma dado foi inserido!";
}
*/

//consulta de 2023
$sql = "SELECT * FROM pedidos WHERE data = 2023";

$consulta = $conexao->query($sql);

if ($consulta->num_rows > 0) {
    while ($row = $consulta->fetch_assoc()) {
        echo "ID do Pedido: " . $row["id_pedido"] . "<br>";
        echo "Data: " . $row["data"] . "<br>";
        echo "Valor: R$" . $row["valor"] . "<br>";
        echo "Status: " . $row["estado"] . "<br>";
        echo "<br>";
    }
} else {
    echo "Nenhum pedido encontrado em 2023.";
}

?>