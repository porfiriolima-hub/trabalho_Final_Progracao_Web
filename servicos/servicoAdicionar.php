<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Adicionar Serviço</title>
</head>
<body>

<h2>Adicionar Serviço</h2>

<form action="servicoAdicionarSalvar.php" method="POST">
    Nome: <br>
    <input type="text" name="nome" required><br><br>

    Preço: <br>
    <input type="number" step="0.01" name="preco" required><br><br>

    Descrição: <br>
    <textarea name="descricao" required></textarea><br><br>

    <button type="submit">Salvar</button>
</form>

</body>
</html>