<?php
require 'config.inc.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    die("Acesso inválido.");
}

$servico_id = intval($_POST['servico_id']);
$data = $_POST['data'];
$hora = $_POST['hora'];
$obs = $_POST['observacoes'];

$sql = "INSERT INTO agendamentos (servico_id, data, hora, observacoes)
        VALUES (?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("isss", $servico_id, $data, $hora, $obs);

if ($stmt->execute()) {
    header("Location: agendamentoSucesso.php");
    exit;
} else {
    echo "Erro ao realizar agendamento.";
}
?>