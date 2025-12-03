<?php
require 'config.inc.php';

$sql = "SELECT * FROM servicos ORDER BY nome ASC";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Serviços Disponíveis</title>
</head>
<body>

<h1>Serviços Disponíveis</h1>

<div style="display:flex; flex-wrap:wrap; gap:20px;">
<?php while ($s = $result->fetch_assoc()): ?>

<div style="border:1px solid #ccc; padding:15px; width:250px;">
    <h3><?= $s['nome'] ?></h3>

    <p><strong>Preço:</strong>
       R$ <?= number_format($s['preco'], 2, ',', '.') ?></p>

    <p><?= nl2br($s['descricao']) ?></p>

    <a href="servicosClient/servicosDetalhes.php?id=<?= $s['id'] ?>">
        Ver detalhes / Agendar
    </a>
</div>

<?php endwhile; ?>
</div>

</body>
</html>