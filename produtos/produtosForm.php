<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Cadastrar Produto</title>
</head>
<body>
<h1>Cadastrar Produto</h1>


<form action="produtosCadastro.php" method="POST">
<label>Nome:</label><br>
<input type="text" name="nome" required><br><br>


<label>Preço:</label><br>
<input type="number" step="0.01" name="preco" required><br><br>


<label>Descrição:</label><br>
<textarea name="descricao" required></textarea><br><br>


<label>Estoque:</label><br>
<input type="number" name="estoque" required><br><br>


<button type="submit">Salvar</button>
</form>
</body>
</html>