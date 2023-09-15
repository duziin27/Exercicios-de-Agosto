<?php
$senha = '123456';

$senha_cripto = password_hash($senha, PASSWORD_DEFAULT);

echo $senha_cripto;

if(password_verify("13579", $senha_cripto)){
    echo "Senha verificada :D";
} else {
    echo "Ultilize a mesma senha >:(";
}

?>