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
<title>Agendar Serviço</title>
</head>
<body>

<h2>Agendar: <?= $servico['nome'] ?></h2>

<form method="POST" action="servicosAgendarSalvar.php">

    <input type="hidden" name="servico_id" value="<?= $servico['id'] ?>">

    Data:<br>
    <input type="date" name="data" required><br><br>

    Hora:<br>
    <input type="time" name="hora" required><br><br>

    Observações:<br>
    <textarea name="observacoes"></textarea><br><br>

    <button type="submit">Confirmar Agendamento</button>

</form>

</body>
</html>