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
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="estilizacao.css">
<link rel="stylesheet" href="style.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<h1 class="mb-4 text-gold">Administração de Produtos</h1>

<div class="mb-3">
  <a href="produtosForm.php" class="btn btn-gold fw-bold">
    ➕ Cadastrar Novo Produto
  </a>
</div>

<div class="table-responsive">
<table class="table table-dark table-striped table-hover align-middle rounded">
    <thead>
      <tr class="table-gold text-center">
        <th>ID</th>
        <th>Nome</th>
        <th>Preço</th>
        <th>Descrição</th>
        <th>Estoque</th>
        <th>Ações</th>
      </tr>
    </thead>

    <tbody>

    <?php while ($row = $result->fetch_assoc()): ?>
      <tr>
        <td class="text-center"><?= $row['id'] ?></td>
        <td><?= $row['nome'] ?></td>
        <td>R$ <?= number_format($row['preco'], 2, ',', '.') ?></td>
        <td><?= $row['descricao'] ?></td>
        <td class="text-center"><?= $row['estoque'] ?></td>

        <td class="text-center">
          <a href="produtosFormAlterar.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-outline-gold me-2">
            ✏️ Alterar
          </a>

          <a href="produtosExcluir.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-outline-danger"
             onclick="return confirm('Tem certeza que deseja excluir este produto?');">
            🗑️ Excluir
          </a>
        </td>
      </tr>

    <?php endwhile; ?>
    <div>
      <a href="../index.php?pg=sistema"class="btn btn-gold-outline">Voltar</a>
    </div>

    </tbody>

</table>
</div></body>
</html>