<?php
require 'config.inc.php';

$sql = "SELECT * FROM produtos ORDER BY nome ASC";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Catálogo de Produtos</title>
</head>
<body>
<h1>Catálogo de Produtos</h1>

<div style="display:flex; flex-wrap:wrap; gap:20px;">
<?php while ($row = $result->fetch_assoc()): ?>

<div style="border:1px solid #ccc; padding:10px; width:200px;">


    <img src="/php/produtos/<?= $row['imagem'] ?>" 
         alt="<?= $row['nome'] ?>"
         style="width:100%; height:150px; object-fit:cover;">

    <h3><?= $row['nome'] ?></h3>
    <p><strong>Preço:</strong> R$ <?= number_format($row['preco'], 2, ',', '.') ?></p>
    <p><?= nl2br($row['descricao']) ?></p>
    <p><strong>Estoque:</strong> <?= $row['estoque'] ?></p>

    <a href="produtoDetalhes.php?id=<?= $row['id'] ?>">Ver detalhes</a>
</div>

<?php endwhile; ?>
</div>

</body>
</html>