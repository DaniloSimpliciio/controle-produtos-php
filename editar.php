<?php
$arquivo = "dados/produtos.json";

$conteudo = file_get_contents($arquivo);

$produtos = json_decode($conteudo,true);

$indice = $_GET["indice"];

$produto = $produtos[$indice];

print_r($produto);

?>