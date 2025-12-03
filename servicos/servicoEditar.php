<?php
require 'config.inc.php';

$id = intval($_GET['id']);
$sql = "SELECT * FROM servicos WHERE id=$id";
$result = $conn->query($sql);
$servico = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Editar Serviço</title>
</head>
<body>

<h2>Editar Serviço</h2>

<form action="servicoEditarSalvar.php" method="POST">
    <input type="hidden" name="id" value="<?= $servico['id'] ?>">

    Nome: <br>
    <input type="text" name="nome" value="<?= $servico['nome'] ?>"><br><br>

    Preço: <br>
    <input type="number" step="0.01" name="preco" value="<?= $servico['preco'] ?>"><br><br>

    Descrição: <br>
    <textarea name="descricao"><?= $servico['descricao'] ?></textarea><br><br>

    <button type="submit">Salvar</button>
</form>

</body>
</html>