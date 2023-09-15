<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex5</title>
</head>
<body>
    Estoque de TV
</body>
</html>
<?php
/*
5 - Dada a tabela "produtos" com os campos "id_produto", "nome"
e "quantidade_estoque", escreva uma consulta para atualizar a
quantidade em estoque de um produto específico (por exemplo,
id_produto = 1) para um novo valor (por exemplo, 50).
*/

require_once('./Config.php');


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

$quantidade = $mysqli->query('SELECT * FROM quantidade_estoque');

$idProduto = $mysqli->query('SELECT * FROM id_produto');

$nova_Quantidade = 50;

// Consulta SQL para atualizar a quantidade em estoque do produto específico
$atualizar = "UPDATE produtos SET quantidade_estoque = ? WHERE id_produto = ?";
$consulta = $conexao->query($atualizar);

// Executa a atualização
if ($stmt->execute()) {
    echo "Quantidade em estoque do produto ID $idProduto atualizada com sucesso para $novaQuantidade.";
} else {
    echo "Erro ao atualizar a quantidade em estoque: " . $stmt->error;
}



?>