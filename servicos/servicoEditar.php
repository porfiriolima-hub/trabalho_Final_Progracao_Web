<?php
require 'config.inc.php';

$id = intval($_GET['id']);
$sql = "SELECT * FROM servicos WHERE id=$id";
$result = $conn->query($sql);
$servico = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Editar Serviço</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="estilizacao.css">
<link rel="stylesheet" href="style.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<body>

  <!-- Navbar opcional -->
  <nav class="navbar navbar-dark mb-4">
    <div class="container">
      <a class="navbar-brand fw-bold" href="#">
        Barber Prime | Administração
      </a>
    </div>
  </nav>

  <div class="container d-flex justify-content-center">
    <div class="card-custom col-12 col-md-8 col-lg-6">

      <h2>Editar Serviço</h2>

      <form action="servicoEditarSalvar.php" method="POST">

        <input type="hidden" name="id" value="<?= $servico['id'] ?>">

        <!-- Nome -->
        <div class="mb-3">
          <label class="form-label">Nome</label>
          <input type="text" name="nome" class="form-control" value="<?= htmlspecialchars($servico['nome']) ?>" required>
        </div>

        <!-- Preço -->
        <div class="mb-3">
          <label class="form-label">Preço</label>
          <input type="number" step="0.01" name="preco" class="form-control" value="<?= $servico['preco'] ?>" required>
        </div>

        <!-- Descrição -->
        <div class="mb-3">
          <label class="form-label">Descrição</label>
          <textarea name="descricao" class="form-control" required><?= htmlspecialchars($servico['descricao']) ?></textarea>
        </div>

        <!-- Botões -->
        <div class="d-flex justify-content-between align-items-center mt-3">
          <a href="servicosAdmin.php" class="btn-back">&larr; Voltar</a>
          <button type="submit" class="btn btn-gold">Salvar Alterações</button>
        </div>

      </form>
    </div>
  </div>

</body>
</body>
</html>