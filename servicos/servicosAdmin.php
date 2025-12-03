<?php
require 'config.inc.php';

$sql = "SELECT * FROM servicos ORDER BY nome ASC";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Barber Prime | Serviços - Administração</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="estilizacao.css">
  <link rel="stylesheet" href="style.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


</head>
<body>

  <!-- Navbar simples só pra manter o padrão visual -->
  <nav class="navbar navbar-dark mb-4">
    <div class="container">
      <a class="navbar-brand fw-bold" href="#">
        Barber Prime | Administração
      </a>
    </div>
  </nav>

  <div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
      <div>
        <h1 class="page-title h3 mb-0">Gerenciamento de Serviços</h1>
        <small class="subtitle">Administre os serviços disponíveis na Barber Prime</small>
      </div>
      <a href="servicoAdicionar.php" class="btn btn-gold-outline btn-sm">
        + Adicionar Serviço
      </a>
    </div>

    <div class="table-responsive">
      <table class="table table-hover align-middle mb-0 table-servicos">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Preço</th>
            <th scope="col" class="text-center">Ações</th>
          </tr>
        </thead>
        <tbody>
          <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
              <td><?= $row['id'] ?></td>
              <td><?= htmlspecialchars($row['nome']) ?></td>
              <td>R$ <?= number_format($row['preco'], 2, ',', '.') ?></td>
              <td class="text-center">
                <div class="btn-group btn-group-sm" role="group">
                  <a href="servicoEditar.php?id=<?= $row['id'] ?>" class="btn btn-gold-outline">Editar</a>
                  <a href="servicoExcluir.php?id=<?= $row['id'] ?>" class="btn btn-gold-outline">Excluir</a>
                  <a href="servicoAgendamentos.php?id=<?= $row['id'] ?>" class="btn btn-gold-outline">Ver Agendamentos</a>
                </div>
              </td>
            </tr>
          <?php endwhile; ?>
                <div>
                    <a href="../index.php?pg=sistema"class="btn btn-gold-outline">Voltar</a>
                </div>
        </tbody>
      </table>
    </div>
  </div>

</body>
</html>
