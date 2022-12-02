<?php

$senhas_chamadas = file_get_contents('senhas-chamadas.json');
$senhas = file_get_contents('senhas.json');

$array_senhas_chamadas = json_decode($senhas_chamadas, true);
$array_senhas = json_decode($senhas, true);

array_push(
    $array_senhas_chamadas, 
    $array_senhas[
        array_search(
            end($array_senhas_chamadas), 
            $array_senhas) + 1
        ]
    );

$json = json_encode($array_senhas_chamadas);
file_put_contents("senhas-chamadas.json", $json);

header('Location: ./chamar-senha.php');

