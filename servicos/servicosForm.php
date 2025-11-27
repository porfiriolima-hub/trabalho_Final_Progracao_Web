<?php
require 'config.inc.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $sql = "INSERT INTO servicos (nome, preco, descricao) VALUES (?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$_POST['nome'], $_POST['preco'], $_POST['descricao']]);
    header("Location: servicosAdmin.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Novo Serviço</title>
</head>
<body>

<h1>Adicionar Serviço</h1>

<form method="POST">
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
