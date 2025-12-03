<?php
require 'config.inc.php';

$servico_id = $_POST['servico_id'];
$data = $_POST['data_agendamento'];
$hora = $_POST['hora_agendamento'];
$observacoes = $_POST['observacoes'];

$sql = "INSERT INTO agendamentos (servico_id, data_agendamento, hora_agendamento, observacoes)
        VALUES ('$servico_id', '$data', '$hora', '$observacoes')";

$conn->query($sql);

header("Location: servicoAgendamentoSucesso.php");
exit;
?>