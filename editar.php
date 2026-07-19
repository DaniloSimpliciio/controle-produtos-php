<?php
$arquivo = "dados/produtos.json";

$produtos = json_decode(
    file_get_contents($arquivo),true);

    $indice = $_GET["indice"];


    
    $produto = $produtos[$indice];

   
?>

<form method="POST">

    <label>Nome:</label>

    <input type="text"
    name="nome"
    value="<?= $produto["nome"] ?>"
    >

 <br>

<form method="POST">

    <label>Categoria:</label>

    <input type="text"
    name="Categoria"
    value="<?= $produto["categoria"] ?>"
    >

<br>

<form method="POST">

    <label>Preço: </label>

    <input type="text"
    name="preco"
    value="<?= $produto["preco"] ?>"
    >

<br>

<form method="POST">

    <label>Quantidade:</label>

    <input type="number"
    name="Quantidade"
    value="<?= $produto["Quantidade"] ?>"
    >
    
<br>

    <label> Descrição: </label>

    <textarea name="descricao"><?= $produto["descricao"] ?> </textarea>


    <button type="submit">salvar alteração</button>

</form>