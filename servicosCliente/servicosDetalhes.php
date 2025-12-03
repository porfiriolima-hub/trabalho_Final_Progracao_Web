<?php
require 'config.inc.php';

if (!isset($_GET['id'])) {
    die("Serviço não encontrado.");
}

$id = intval($_GET['id']);
$sql = "SELECT * FROM servicos WHERE id = $id";
$result = $conn->query($sql);
$servico = $result->fetch_assoc();

if (!$servico) {
    die("Serviço inexistente.");
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title><?= $servico['nome'] ?></title>
</head>
<body>

<h1><?= $servico['nome'] ?></h1>

<p><strong>Preço:</strong>
   R$ <?= number_format($servico['preco'], 2, ',', '.') ?></p>

<p><strong>Descrição:</strong><br>
<?= nl2br($servico['descricao']) ?></p>

<br>
<a href="servicosAgendar.php?id=<?= $servico['id'] ?>">
     Agendar este Serviço
</a>
<br><br>

<a href="servicosCliente.php">Voltar</a>

</body>
</html>