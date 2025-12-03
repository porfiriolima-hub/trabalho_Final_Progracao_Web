<?php
require 'config.inc.php';

$servico_id = $_POST['servico_id'];
$data = $_POST['data'];
$hora = $_POST['hora'];
$observacoes = $_POST['observacoes'];

$sql = "INSERT INTO agendamentos (servico_id, data, hora, observacoes)
        VALUES ('$servico_id', '$data', '$hora', '$observacoes')";

$conn->query($sql);

header("Location: servicoAgendamentoSucesso.php");
exit;
?>