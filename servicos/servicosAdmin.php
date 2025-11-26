<?php
require 'config.inc.php';

$sql = "SELECT * FROM servicos";
$stmt = $pdo->query($sql);
$servicos = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Gerenciar Serviços</title>
</head>
<body>

<h1>Serviços</h1>
<a href="servicosForm.php">Adicionar Novo Serviço</a>
<br><br>

<table border="1" cellpadding="8">
<tr>
    <th>ID</th>
    <th>Nome</th>
    <th>Preço</th>
    <th>Ações</th>
</tr>

<?php foreach ($servicos as $s): ?>
<tr>
    <td><?= $s['id'] ?></td>
    <td><?= $s['nome'] ?></td>
    <td>R$ <?= number_format($s['preco'], 2, ',', '.') ?></td>
    <td>
        <a href="servicosFormAlterar.php?id=<?= $s['id'] ?>">Editar</a> |
        <a href="servicosExcluir.php?id=<?= $s['id'] ?>" onclick="return confirm('Excluir serviço?')">Excluir</a> |
        <a href="servicosAgendar.php?id=<?= $s['id'] ?>">Agendar</a>
    </td>
</tr>
<?php endforeach; ?>

</table>

</body>
</html>
