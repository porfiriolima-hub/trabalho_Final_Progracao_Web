<?php 
  require_once "config.inc.php";

  $id = $_GET["id"];
  $sql = "DELETE FROM clientes WHERE id = '$id'";


  $resultado = mysqli_query($conexao, $sql);

  if($resultado){
    echo "<div class='alert alert-success text-center'>Registro excluído com sucesso!</div>";
    echo "<a href='?pg=admin/clientes-admin' class='btn btn-outline-primary'>Voltar</a>";
  }else{
    echo "<div class='alert alert-danger text-center'>Erro ao excluir registro!</div>";
  }

  mysqli_close($conexao);