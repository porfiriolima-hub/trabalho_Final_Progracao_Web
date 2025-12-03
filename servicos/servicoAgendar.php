<?php
$id = intval($_GET['id']);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Agendar Serviço</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="estilizacao.css">
<link rel="stylesheet" href="style.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>

<nav class="navbar navbar-dark mb-4" style="background-color: var(--black-steel);">
    <div class="container">
      <a class="navbar-brand fw-bold" href="#">Barber Prime | Administração</a>
    </div>
  </nav>

  <div class="container d-flex justify-content-center">
    <div class="card-custom col-12 col-md-8 col-lg-6">

      <h2>Agendar Serviço</h2>

      <form action="servicoAgendarSalvar.php" method="POST">

        <input type="hidden" name="servico_id" value="<?= $id ?>">

        
        <div class="mb-3">
          <label class="form-label">Data</label>
          <input type="date" name="data" class="form-control" required>
        </div>

        
        <div class="mb-3">
          <label class="form-label">Hora</label>
          <input type="time" name="hora" class="form-control" required>
        </div>

        
        <div class="mb-3">
          <label class="form-label">Observações</label>
          <textarea name="observacoes" class="form-control"></textarea>
        </div>

        
        <div class="d-flex justify-content-between align-items-center mt-3">
          <a href="servicoAgendamentos.php?id=<?= $id ?>" class="btn-back">&larr; Voltar</a>
          <button type="submit" class="btn btn-gold">Agendar</button>
        </div>

      </form>

    </div>
  </div>

</body>
</html>