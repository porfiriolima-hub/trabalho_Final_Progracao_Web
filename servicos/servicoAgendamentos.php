<?php
require 'config.inc.php';

$id = intval($_GET['id']);

$sql = "SELECT * FROM agendamentos WHERE servico_id=$id ORDER BY data, hora";
$result = $conn->query($sql);

$servico = $conn->query("SELECT nome FROM servicos WHERE id=$id")->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Agendamentos</title>
</head>
<body>

<h2>Agendamentos do serviço: <?= $servico['nome'] ?></h2>

<a href="servicoAgendar.php?id=<?= $id ?>">Novo Agendamento</a>
<br><br>

<table border="1" cellpadding="8">
<tr>
    <th>Data</th>
    <th>Hora</th>
    <th>Observações</th>
</tr>

<?php while ($row = $result->fetch_assoc()): ?>
<tr>
    <td><?= $row['data'] ?></td>
    <td><?= $row['hora'] ?></td>
    <td><?= $row['observacoes'] ?></td>
</tr>
<?php endwhile; ?>
</table>

</body>
</html>