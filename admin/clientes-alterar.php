<?php 

require_once "config.inc.php";

if($_SERVER["REQUEST_METHOD"]== "POST"){
    $cliente = $_POST["cliente"];
    $cidade = $_POST["cidade"];
    $estado = $_POST["estado"];
    $id = $_POST["id"];

    $sql = "UPDATE clientes SET
    cliente = '$cliente',
    cidade = '$cidade',
    estado = '$estado'
    WHERE id = '$id'";

    if(mysqli_query($conexao,$sql)){
      echo "<div class='alert alert-success text-center'>Cliente alterado com sucesso!</div>";
      echo "<a href='?pg=admin/clientes-admin' class='btn btn-outline-primary'>Voltar</a>";
    }else{
      echo "<div class='alert alert-success text-center'>Erro ao alterar cadastro do cliente!</div>";
    }

}else{
  echo "<div class='alert alert-success text-center'>Acesso negado!</div>";
  echo "<a href='?pg=admin/clientes-admin' class='btn btn-outline-primary'>Voltar</a>";
}

mysqli_close($conexao);