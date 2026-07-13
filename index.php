<?php

$arquivo = "dados/produtos.json";

$conteudo = file_get_contents($arquivo);

$produtos = json_decode($conteudo, true);

?> 
 
 <table border="1">

 <tr>
    <th>Nome</th>
    <th>categoria</th>
    <th>preço</th>
    <th>quantidade</th>
 </tr>


<?php foreach ($produtos as $produto) {?>

<tr>

   <td><?= $produto["nome"]?></td>

   <td><?= $produto["categoria"]?></td>

   <td><?= $produto["preco"]?></td>

   <td><?= $produto["quantidade"]?></td>

</tr>

<?php } ?>

</table>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle de produtos</title>

    <link rel="stylesheet" href="css/style.css">
     <link rel="stylesheet" href="cadastrar.php">
</head>
<body>
    
   <header>
    <h1>Sitema de Controle de Produtos</h1>
   </header>

   <nav>
    <a href="index.php">Início</a>
    <a href="#">produtos</a>
    <a href="cadastrar.php">cadastrar</a>
   </nav>

   <main>
     <h2> Bem- vindo ao sistema</h2>

     <p>
        Utilize o menu acima para gerenciar os produtos.
     </p>

     <section>

        
    <a class="botao" href="cadastrar.php">
        cadastrar Produto
    </a>

        <button>
             listar produtos
        </button>
     </section>

   </main>

   <footer>
    <p>
        Sistema desenvolvido em PHP
    </p>

   </footer>

</body>

</html>