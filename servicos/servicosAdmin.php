<?php
require 'config.inc.php';

$sql = "SELECT * FROM servicos ORDER BY nome ASC";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Serviços - Administração</title>
</head>
<body>

<h1>Gerenciamento de Serviços</h1>

<a href="servicoAdicionar.php">Adicionar Serviço</a>
<br><br>

<table border="1" cellspacing="0" cellpadding="10">
<tr>
    <th>ID</th>
    <th>Nome</th>
    <th>Preço</th>
    <th>Ações</th>
</tr>

<?php while ($row = $result->fetch_assoc()): ?>
<tr>
    <td><?= $row['id'] ?></td>
    <td><?= $row['nome'] ?></td>
    <td>R$ <?= number_format($row['preco'], 2, ',', '.') ?></td>
    <td>
        <a href="servicoEditar.php?id=<?= $row['id'] ?>">Editar</a> |
        <a href="servicoExcluir.php?id=<?= $row['id'] ?>">Excluir</a> |
        <a href="servicoAgendamentos.php?id=<?= $row['id'] ?>">Ver Agendamentos</a>
    </td>
</tr>
<?php endwhile; ?>
</table>

</body>
</html>