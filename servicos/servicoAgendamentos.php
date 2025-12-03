<?php
require 'config.inc.php';

$id = intval($_GET['id']);

$sql = "SELECT * FROM agendamentos WHERE servico_id=$id ORDER BY data_agendamento, hora_agendamento";
$result = $conn->query($sql);

$servico = $conn->query("SELECT nome FROM servicos WHERE id=$id")->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Agendamentos</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="estilizacao.css">
<link rel="stylesheet" href="style.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>

 <nav class="navbar navbar-dark mb-4">
    <div class="container">
      <a class="navbar-brand fw-bold" href="#">
        Barber Prime | Administração
      </a>
    </div>
  </nav>

  <div class="container pb-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
      <div>
        <h2 class="page-title h4 mb-0">
          Agendamentos do serviço: <?= htmlspecialchars($servico['nome']) ?>
        </h2>
        <small class="subtitle">Visualize e gerencie os horários agendados</small>
      </div>

      <div class="d-flex gap-2">
        <a href="servicosAdmin.php" class="btn-back">&larr; Voltar</a>
        <a href="servicoAgendar.php?id=<?= $id ?>" class="btn btn-gold-outline btn-sm">
          + Novo Agendamento
        </a>
      </div>
    </div>

    <div class="table-responsive">
      <table class="table table-hover align-middle mb-0 table-agendamentos">
        <thead>
          <tr>
            <th scope="col">Data</th>
            <th scope="col">Hora</th>
          </tr>
        </thead>
        <tbody>
          <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
              <td><?= htmlspecialchars($row['data_agendamento']) ?></td>
              <td><?= htmlspecialchars($row['hora_agendamento']) ?></td>
              <td><?= htmlspecialchars($row['observacoes']) ?></td>
            </tr>
          <?php endwhile; ?>
        </tbody>
      </table>
    </div>
  </div>

</body>
</html>