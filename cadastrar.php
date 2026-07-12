<?php
$arquivo = "dados/produtos.json";

$conteudo = file_get_contents($arquivo);

$produtos = json_decode($conteudo,true);

echo"<pre>";

print_r($produtos);

echo"</pre>";

if ($_SERVER["REQUEST_METHOD"]=="POST"){

    echo "<pre>";
    print_r($_POST);
    echo"</pre>";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Produto</title>

    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <header>

    <h1>Cadastro de Produtos</h1>

    </header>
    
    <nav>
        <a href="index.php">início</a>
        <a href="cadastrar.php">cadastrar</a>
        <a href="#">produtos</a>

    </nav>

    <main>

    <h2>Novo Produto</h2>

    <form action="cadastrar.php" method="post">

    <label for="">Nome do Produto:

    </label>

    <br>

    <input type="text" name="nome">

    <br><br>

    <label for="">
    categoria:
    </label>

    <br>

    <input type="text" name="Categoria">

    <br><br>

    <label for="">
    Preço:
    </label>

    <br>

    <input type="number" name="preco" step="0.01">

    <br><br>

    <label for="">
    quantidade:
    </label>

    <br>

    <input type="Number" name="quantidade">

    <br><br>

    <label for="">
    Descrição:
    </label>

    <br>

    <textarea name="Descrição" ></textarea>

    <br><br>

    <button type="submit">
    cadastrar
    </button>

    </form>

    </main>

    <footer>

       <p>
       Sistema de Controle de Produtos
       </p>
    
</body>
</html>