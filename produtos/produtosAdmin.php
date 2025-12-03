<?php
require 'config.inc.php';


$sql = "SELECT * FROM produtos ORDER BY id DESC";
$stmt = $pdo->query($sql);
$produtos = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Admin - Produtos</title>
</head>
<body>
<h1>Produtos</h1>
<a href="produtosForm.php">Cadastrar Novo Produto</a>
<br><br>


<table border="1" cellpadding="8" cellspacing="0">
<tr>
<th>ID</th>
<th>Imagem</th>
<th>Nome</th>
<th>Preço</th>
<th>Descrição</th>
<th>Estoque</th>
<th>Ações</th>
</tr>


<?php foreach ($produtos as $row): ?>
<tr>
<td><?= htmlspecialchars($row['id']) ?></td>
<td>
<?php if (!empty($row['imagem']) && file_exists(__DIR__ . '/'. $row['imagem'])): ?>
<img src="<?= htmlspecialchars($row['imagem']) ?>" alt="<?= htmlspecialchars($row['nome']) ?>" width="80">
<?php else: ?>
<span>Sem imagem</span>
<?php endif; ?>
</td>
<td><?= htmlspecialchars($row['nome']) ?></td>
<td>R$ <?= number_format($row['preco'], 2, ',', '.') ?></td>
<td><?= nl2br(htmlspecialchars($row['descricao'])) ?></td>
<td><?= htmlspecialchars($row['estoque']) ?></td>
<td>
<a href="produtosFormAlterar.php?id=<?= htmlspecialchars($row['id']) ?>">Editar</a> |
<a href="produtosExcluir.php?id=<?= htmlspecialchars($row['id']) ?>" onclick="return confirm('Excluir produto?')">Excluir</a>
</td>
</tr>
<?php endforeach; ?>


</table>
</body>
</html>