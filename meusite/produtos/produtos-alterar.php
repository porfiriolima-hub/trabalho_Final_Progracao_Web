<?php 

require_once "config.inc.php";

if($_SERVER["REQUEST_METHOD"]== "POST"){
    $produto = $_POST["produto"];
    $preco = $_POST["preco"];
    $estoque = $_POST["estoque"];
    $categoria = $_POST["categoria"];
    $descricao = $_POST["descricao"];
    $id = $_POST["id"];

    $sql = "UPDATE produtos SET
    produto = '$produto',
    preco = '$preco',
    estoque = '$estoque',
    categoria = '$categoria',
    descricao = '$descricao'
    WHERE id = '$id'";

    if(mysqli_query($conexao,$sql)){
      echo "<div class='alert alert-success text-center'>Produto alterado com sucesso!</div>";
      echo "<a href='?pg=produtos/produtos-admin' class='btn btn-outline-primary'>Voltar</a>";
    }else{
      echo "<div class='alert alert-success text-center'>Erro ao alterar cadastro de produto!</div>";
    }

}else{
  echo "<div class='alert alert-success text-center'>Acesso negado!</div>";
  echo "<a href='?pg=produtos/produtos-admin' class='btn btn-outline-primary'>Voltar</a>";
}

mysqli_close($conexao);