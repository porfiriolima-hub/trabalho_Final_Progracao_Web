<?php 

  require_once "config.inc.php";

  if($_SERVER["REQUEST_METHOD"]== "POST"){
    $produto = $_POST["produto"];
    $preco = $_POST["preco"];
    $estoque = $_POST["estoque"];
    $categoria = $_POST["categoria"];
    $descricao = $_POST["descricao"];

    $sql = "INSERT INTO produtos (produto, preco, estoque, categoria, descricao)
    VALUES ('$produto', '$preco','$estoque', '$categoria', '$descricao')";

    $inserir = mysqli_query($conexao, $sql);

    if($inserir) {
      echo "<div class='alert alert-success text-center'>Produto cadastrado com sucesso!</div>";
      echo "<a href='?pg=produtos/produtos-admin' class='btn btn-outline-primary'>Voltar</a>";
    }else{
      echo "<div class='alert alert-success text-center'>Erro ao Cadastrar Produto!</div>";
    }
  }else{
    echo "<h2>Acesso negado!</h2>";
    echo "<a href='?pg=produtos/produtos-admin' class='btn btn-outline-primary'>Voltar</a>";
  }
  
  mysqli_close($conexao);