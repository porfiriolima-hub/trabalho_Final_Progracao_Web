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
    $sql = "INSERT INTO agendamentos (servico_id, data_agendamento, hora_agendamento)
            VALUES (?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id, $_POST['data'], $_POST['hora']]);

    echo "<script>alert('Agendamento realizado com sucesso!');</script>";
    echo "<script>window.location='servicosAdmin.php';</script>";
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Agendar Serviço</title>
</head>
<body>

<h1>Agendar: <?= $servico['nome'] ?></h1>

<form method="POST">
    Data: <br>
    <input type="date" name="data" required><br><br>

    Hora: <br>
    <input type="time" name="hora" required><br><br>

    <button type="submit">Confirmar Agendamento</button>
</form>

</body>
</html>
