<?php

$arquivo = "dados/produtos.json";
$produtos = json_decode(
    file_get_contents($arquivo),true
);

$indice = $_GET["indice"];

array_splice($produtos,$indice,1);

$json = json_encode($produtos,JSON_PRETTY_PRINT);

file_put_contents($arquivo,$json);

header("location: listar.php");
exit;

?>