<?php
require 'config.inc.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Cadastrar Produto</title>
</head>
<body>
<h1>Cadastrar Novo Produto</h1>


<form action="produtosCadastro.php" method="post" enctype="multipart/form-data">
<label>Nome:</label><br>
<input type="text" name="nome" required><br><br>


<label>Preço:</label><br>
<input type="number" step="0.01" name="preco" required><br><br>


<label>Descrição:</label><br>
<textarea name="descricao" rows="4" cols="40" required></textarea><br><br>


<label>Estoque:</label><br>
<input type="number" name="estoque" required><br><br>


<label>Imagem:</label><br>
<input type="file" name="imagem" accept="image/*"><br><br>


<button type="submit">Cadastrar</button>
</form>


<br>
<a href="produtosAdmin.php">Voltar</a>
</body>
</html>