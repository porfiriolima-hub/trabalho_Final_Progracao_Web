<?php
require 'config.inc.php';


if (!isset($_GET['id'])) {
die('ID do produto não informado.');
}


$id = $_GET['id'];
$sql = "SELECT * FROM produtos WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$produto = $result->fetch_assoc();


if (!$produto) {
die('Produto não encontrado.');
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


<form action="produtosAlterar.php" method="POST">
<input type="hidden" name="id" value="<?= $produto['id'] ?>">


<label>Nome:</label><br>
<input type="text" name="nome" value="<?= $produto['nome'] ?>" required><br><br>


<label>Preço:</label><br>
<input type="number" step="0.01" name="preco" value="<?= $produto['preco'] ?>" required><br><br>


<label>Descrição:</label><br>
<textarea name="descricao" required><?= $produto['descricao'] ?></textarea><br><br>


<label>Estoque:</label><br>
<input type="number" name="estoque" value="<?= $produto['estoque'] ?>" required><br><br>


<button type="submit">Salvar Alterações</button>
</form>
</body>
</html>