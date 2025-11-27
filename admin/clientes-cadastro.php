<?php 

  require_once "config.inc.php";

  if($_SERVER["REQUEST_METHOD"]== "POST"){
    $nome = $_POST["cliente"];
    $cidade = $_POST["cidade"];
    $estado = $_POST["estado"];

    $sql = "INSERT INTO clientes (cliente, cidade, estado)
    VALUES ('$nome', '$cidade','$estado')";

    $inserir = mysqli_query($conexao, $sql);

    if($inserir) {
      echo "<div class='alert alert-success text-center'>Cliente cadastrado com sucesso!</div>";
      echo "<a href='?pg=admin/clientes-admin' class='btn btn-outline-primary'>Voltar</a>";
    }else{
      echo "<div class='alert alert-success text-center'>Erro ao Cadastrar cliente!</div>";
    }
  }else{
    echo "<div class='alert alert-success text-center'>Acesso negado!</div>";
    echo "<a href='?pg=admin/clientes-admin' class='btn btn-outline-primary'>Voltar</a>";
  }
  
  mysqli_close($conexao);