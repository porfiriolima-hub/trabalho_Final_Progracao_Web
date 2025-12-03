<?php
require 'config.inc.php';

if (!isset($_GET['id'])) {
    die("Produto não encontrado.");
}

$id = intval($_GET['id']);
$sql = "SELECT * FROM produtos WHERE id = $id";
$result = $conn->query($sql);
$produto = $result->fetch_assoc();

if (!$produto) {
    die("Produto inexistente.");
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title><?= $produto['nome'] ?></title>
</head>
<body>

<h1><?= $produto['nome'] ?></h1>

<img src="/denilson/produtos/<?= $produto['imagem'] ?>" 
     alt="<?= $produto['nome'] ?>"
     style="width:300px; height:300px; object-fit:cover;">

<p><strong>Preço:</strong> R$ <?= number_format($produto['preco'], 2, ',', '.') ?></p>
<p><strong>Descrição:</strong><br><?= nl2br($produto['descricao']) ?></p>
<p><strong>Estoque disponível:</strong> <?= $produto['estoque'] ?></p>

<a href="produtosCliente.php">Voltar</a>

</body>
</html>