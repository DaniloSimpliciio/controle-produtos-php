<?php
$arquivo = "dados/produtos.json";

$conteudo = file_get_contents($arquivo);

$produtos = json_decode($conteudo,true);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Produtos</title>

    <link rel="stylesheet" href="css/style.css">

</head>

<body>

<h1>Lista de Produtos</h1>

<table>

<tr>
   <th>Índice</th>
    <th>Nome</th>
    <th>Categoria</th>
    <th>Preço</th>
    <th>Quantidade</th>
    <th>Ações</th>
</tr>

<?php foreach($produtos as $indice => $produto) { ?>

  <tr>

    <td><?php echo $indice;?></td>

    <td><?php echo $produto["nome"];?></td>
    
    <td><?php echo $produto["categoria"];?></td>

    <td><?php echo $produto["preco"];?></td>

    <td><?php echo $produto["quantidade"];?></td>

    <td>
      <a href="editar.php?indice=<?php echo $indice ?>">editar</a>
    </td>

  </tr>

  <?php } ?>

</table>    
</body>
</html>