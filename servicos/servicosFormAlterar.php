<?php
require 'config.inc.php';

$id = $_GET['id'];

$sql = "SELECT * FROM servicos WHERE id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$id]);
$servico = $stmt->fetch();

if (!$servico) {
    die("Serviço não encontrado!");
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $sql = "UPDATE servicos SET nome=?, preco=?, descricao=? WHERE id=?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$_POST['nome'], $_POST['preco'], $_POST['descricao'], $id]);
    header("Location: servicosAdmin.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Editar Serviço</title>
</head>
<body>

<h1>Editar Serviço</h1>

<form method="POST">
    Nome: <br>
    <input type="text" name="nome" value="<?= $servico['nome'] ?>" required><br><br>

    Preço: <br>
    <input type="number" step="0.01" name="preco" value="<?= $servico['preco'] ?>" required><br><br>

    Descrição: <br>
    <textarea name="descricao" required><?= $servico['descricao'] ?></textarea><br><br>

    <button type="submit">Atualizar</button>
</form>

</body>
</html>
