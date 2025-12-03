
<!DOCTYPE html>
<html lang="pt-br">
<>
  <title>Barber Prime | Adicionar Serviço</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="estilizacao.css">
<link rel="stylesheet" href="style.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  
</head>
<body>

  <!-- nav opcional -->
  <nav class="navbar navbar-dark mb-4">
    <div class="container">
      <a class="navbar-brand fw-bold" href="#">Barber Prime | Administração</a>
    </div>
  </nav>

  <div class="container d-flex justify-content-center">
    <div class="card-custom col-12 col-md-8 col-lg-6">

      <h2>Adicionar Serviço</h2>

      <form action="servicoAdicionarSalvar.php" method="POST">

        
        <div class="mb-3">
          <label class="form-label">Nome</label>
          <input type="text" name="nome" class="form-control" required>
        </div>

        
        <div class="mb-3">
          <label class="form-label">Preço</label>
          <input type="number" step="0.01" name="preco" class="form-control" required>
        </div>

        
        <div class="mb-3">
          <label class="form-label">Descrição</label>
          <textarea name="descricao" class="form-control" required></textarea>
        </div>

        <!-- Botões -->
        <div class="d-flex justify-content-between align-items-center mt-3">
          <a href="servicosAdmin.php" class="btn-back">&larr; Voltar</a>
          <button type="submit" class="btn btn-gold">Salvar</button>
        </div>

      </form>
    </div>
  </div>

</body>
</html>


