<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex3</title>
</head>

<body>
    <form action="Ex3.php" method="post">
        <label for="nome">Digite um nome:</label>
        <input type="text" name="nome">
        
        <input type="submit" value="ENVIAR">
    </form>
</body>

</html>

<?php
/*
3 - [Nomes em letra Maiúscula] - Crie uma função que receba uma
lista de nomes e retorne uma outra lista em que apenas a primeira
letra de cada nome seja maiúscula e o restante minúscula.
fmaiuscula(["mavis", "senaida", "letty"]) ➞ ["Mavis", "Senaida", "Lett
y"]
fmaiuscula(["samuel", "MABELLE", "letitia", "meridith"]) ➞ ["Samuel",
"Mabelle", "Letitia", "Meridith"]
fmaiuscula(["Slyvia", "Kristal", "Sharilyn", "Calista"]) ➞ ["Slyvia",
"Kristal", "Sharilyn", "Calista"]
fmaiuscula(["MaViS", "sENaida", "leTTy"]) ➞ ["Mavis", "Senaida", "Lett
y"]
*/

//$ = array("diogo","EdUardo","mARIA");
//letras($array);

$nome = $_POST['nome'] ?? "";

function letras($nome) {
        $nomes = ucwords(strtolower($nome));
        echo $nomes;
    }

    echo letras($nome);




//ucwords(strtolower
?>

