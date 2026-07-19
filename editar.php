<?php
$arquivo = "dados/produtos.json";

$produtos = json_decode(
    file_get_contents($arquivo),true);

    $indice = $_GET["indice"];


    
    $produto = $produtos[$indice];

    if($_SERVER["REQUEST_METHOD"]=="POST"){

       $produtos[$indice]["nome"] = $_POST["nome"];
       $produtos[$indice]["categoria"] = $_POST["categoria"];
       $produtos[$indice]["preco"] = $_POST["preco"];
       $produtos[$indice]["quantidade"] = $_POST["quantidade"];
       $produtos[$indice]["descricao"] = $_POST["descricao"];
    

    $json = json_encode($produtos, JSON_PRETTY_PRINT);

    file_put_contents($arquivo,$json);

    header("location: listar.php");
    exit;
    }
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
    name="categoria"
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
    name="quantidade"
    value="<?= $produto["quantidade"] ?>"
    >

<br>

    <label> Descrição: </label>

    <textarea name="descricao"><?= $produto["descricao"] ?> </textarea>


    <button type="submit">salvar alteração</button>

</form>