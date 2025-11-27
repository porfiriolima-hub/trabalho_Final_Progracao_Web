
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<div class="container mt-5">
  <div class="card shadow-sm p-4">
    <h1 class="text-center text-primary mb-4">Painel do Administrador</h1>

    <div class="d-flex justify-content-center mb-3">
      <a href="?pg=admin/clientes-admin" class="btn btn-outline-primary me-2">Listar Clientes</a>
      <a href="?pg=admin/clientes-form" class="btn btn-success me-2">Cadastrar Cliente</a>
      <a href='?pg=sistema' class='btn btn-warning btn-sm me-2'><strong>Sistema</strong></a>
    </div>


    <?php 

      if(empty($_SERVER['QUERY_STRING'])) {
        echo "<p class='text-center text-muted'>Bem-vindo ao painel de produtos.</p>";
      }else{
        $pg = "$_GET[pg]";
        include_once "$pg.php";
      }
    ?>
  </div>
</div>