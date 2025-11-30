<?php
require 'config.inc.php';


$sql = "SELECT * FROM produtos";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Admin - Produtos</title>
</head>
<body>
<h1>Administração de Produtos</h1>
<a href="produtos/produtosForm.php">Cadastrar Novo Produto</a>
<table border="1" cellpadding="8" cellspacing="0">
<tr>
<th>ID</th>
<th>Nome</th>
<th>Preço</th>
<th>Descrição</th>
<th>Estoque</th>
<th>Ações</th>
</tr>


<?php while ($row = $result->fetch_assoc()): ?>
<tr>
<td><?= $row['id'] ?></td>
<td><?= $row['nome'] ?></td>
<td>R$ <?= number_format($row['preco'], 2, ',', '.') ?></td>
<td><?= $row['descricao'] ?></td>
<td><?= $row['estoque'] ?></td>
<td>
<a href="produtos/produtosFormAlterar.php?id=<?= $row['id'] ?>">Alterar</a> |
<a href="produtos/produtosExcluir.php?id=<?= $row['id'] ?>">Excluir</a>
</td>
</tr>
<?php endwhile; ?>


</table>
</body>
</html>