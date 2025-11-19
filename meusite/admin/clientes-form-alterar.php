<?php 
  require_once 'config.inc.php';

  $id = $_GET['id'];
  $sql = "SELECT * FROM clientes WHERE id ='$id'";
  $resultado = mysqli_query($conexao, $sql);

  if(mysqli_num_rows($resultado) > 0){
      while($dados = mysqli_fetch_array($resultado)){
        $nome = $dados['cliente'];
        $cidade = $dados['cidade'];
        $estado = $dados['estado'];
        $id = $dados['id'];
      }

  
?>


<h2>Alterar de Cliente</h2>
<form action="?pg=admin/clientes-alterar" method="post">
      <input type="hidden" name="id" value="<?=$id?>">
  <div class="mb-3">
    <label class="form-label">Nome:</label>
    <input type="text" class="form-control" name="cliente" value="<?=$nome?>"><br>
  </div>
  <div class="mb-3">
    <label class="form-label">Cidade:</label>
    <input type="text" class="form-control" name="cidade" value="<?=$cidade?>"><br>
  </div>
  <div class="mb-3">
    <label class="form-label" >Estado:</label>
    <input type="text" class="form-control" name="estado" value="<?=$estado?>"><br>
  </div>

    <input type="submit" class="btn btn-primary" value="Alterar Cliente">
</form>

<?php 
  }else{
    echo"<h2>Nenhum cliente encontrado</h2>";
  }
?>