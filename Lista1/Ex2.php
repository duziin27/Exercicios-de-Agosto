<?php
/*
2 - Dada a tabela "produtos" com os campos "id_produto", "nome"
e "preco", escreva uma consulta para selecionar todos os produtos
cujo preço seja igual ou inferior a 50.
*/

//conexão ao banco
require_once('Config.php');

//criando a tabela
/*
$sql_clientes = "CREATE TABLE agosto.produtos(
    id_produto INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(50) NOT NULL,
    preco VARCHAR(50) NOT NULL,
    quantidade_estoque INT NOT NULL
)";
if ($conexao->query($sql_clientes)){
    echo "Tabela foi criada";
} else {
    echo "Nenhuma tabela criada";
}
*/

//inserindo dados

/*
$inserir_clientes = "INSERT INTO agosto.produtos VALUES ('', 'Ryzen 5 5600G', 890, 7), ('', 'RTX 2060 SUPER', 1100, 5), ('', '16GB RAM Cuso', 240, 8), ('', 'Watercooler 240mm darkFlash', 350, 10), ('', 'Fonte 600W 80plus bronze', 360, 8), ('', 'B450 aorus elite M', 320, 3), ('', 'Gabinete', 300, 1),  ('', 'Controle XBOX720 Sony', 45, 20), ('', 'Trident sabor menta', 10, 300), ('', 'Cabo sem fio', 35, 100), ('', 'Adaptador HDMI para P2', 5, 12)";

if($conexao->query($inserir_clientes)){
    echo "Os dados foram inseridos com sucesso!";
} else {
    echo "Nenhum dado foi inserido";
};
*/

//teste selecionando preço abaixo de 50 sem input

$selecionador = "SELECT * FROM produtos WHERE preco <= 50";
$clientes = $conexao->query($selecionador);

while($lista = $clientes->fetch_assoc()){
    echo $lista['nome'];
    echo " ";
    echo "R$ " .$lista['preco'];
    echo "<br>";
}


?>