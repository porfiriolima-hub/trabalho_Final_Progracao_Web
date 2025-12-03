<?php
require 'config.inc.php';


if (!isset($_GET['id'])) {
die("ID do produto não informado!");
}


$id = $_GET['id'];

$sql = "SELECT * FROM produtos WHERE id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$id]);
$produto = $stmt->fetch(PDO::FETCH_ASSOC);


if (!$produto) {
die("Produto não encontrado!");
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Alterar Produto</title>
</head>
<body>
<h1>Alterar Produto</h1>


<form action="produtosAlterar.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="id" value="<?= $produto['id'] ?>">


<label>Nome:</label><br>
<input type="text" name="nome" value="<?= htmlspecialchars($produto['nome']) ?>" required><br><br>


<label>Preço:</label><br>
<input type="number" step="0.01" name="preco" value="<?= htmlspecialchars($produto['preco']) ?>" required><br><br>


<label>Descrição:</label><br>
<textarea name="descricao" rows="4" cols="40" required><?= htmlspecialchars($produto['descricao']) ?></textarea><br><br>


<label>Estoque:</label><br>
<input type="number" name="estoque" value="<?= htmlspecialchars($produto['estoque']) ?>" required><br><br>


<label>Imagem Atual:</label><br>
<?php if (!empty($produto['imagem']) && file_exists($produto['imagem'])): ?>
<img src="<?= $produto['imagem'] ?>" width="120"><br>
<?php else: ?>
<p>Sem imagem</p>
<?php endif; ?><br>


<label>Enviar Nova Imagem (opcional):</label><br>
<input type="file" name="imagem" accept="image/*"><br><br>


<button type="submit">Salvar Alterações</button>
</form>


<br>
<a href="produtosAdmin.php">Voltar</a>
</body>
</html>