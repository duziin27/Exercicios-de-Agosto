<?php
/*
2 - [limpeza de lista] Crie uma função que limpe uma lista, removendo
todos os itens duplicados dela e retorne com a lista limpa. (a ordem
final dos números não importa)
limpezaLista([1, 3, 3, 5, 5]) ➞ [1, 3, 5]
limpezaLista([4, 4, 4, 4]) ➞ [4]
limpezaLista([5, 7, 8, 9, 10, 15]) ➞ [5, 7, 8, 9, 10, 15]
limpezaLista([3, 3, 3, 2, 1]) ➞ [1, 2, 3] ou [3, 2, 1]
limpezaLista([3, 3, 3, 1, 1, 2, 4, 4]) ➞ [1, 2, 3, 4] ou [3, 1, 2, 4]
*/

function removedor($listanova) {
    return array_values(array_unique($listanova));
}

// Exemplo de uso
$lista = [2, 4, 6, 8, 2, 10, 4, 12];
$clearlist = removedor($lista);

print_r($clearlist);


?>