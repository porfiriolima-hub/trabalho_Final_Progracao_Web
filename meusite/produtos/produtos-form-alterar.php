<?php 
  require_once 'config.inc.php';

  $id = $_GET['id'];
  $sql = "SELECT * FROM produtos WHERE id ='$id'";
  $resultado = mysqli_query($conexao, $sql);

  if(mysqli_num_rows($resultado) > 0){
      while($dados = mysqli_fetch_array($resultado)){
        $produto = $dados['produto'];
        $preco = $dados['preco'];
        $estoque = $dados['estoque'];
        $categoria = $dados['categoria'];
        $descricao = $dados['descricao'];
        $id = $dados['id'];
      }

  
?>


<div class="container mt-5">
  <div class="card shadow-sm p-4">
    <h2 class="text-center text-primary">Cadastro de Produtos</h2>
  <form action="?pg=produtos/produtos-alterar" method="post">  
      <input type="hidden" name="id" value="<?=$id?>">
    <div class="mb-3">
      <label class="form-label">Produto:</label>
      <input type="text" class="form-control" name="produto" value="<?=$produto?>"><br>
    </div>
    <div class="mb-3">
      <label class="form-label">Preço:</label>
      <input type="number" class="form-control" name="preco" value="<?=$preco?>"><br>
    </div>
    <div class="mb-3">
      <label class="form-label" >Estoque:</label>
      <input type="number" class="form-control" name="estoque" value="<?=$estoque?>"><br>
    </div>
    <div class="mb-3">
      <label class="form-label" >Categoria:</label>
      <input type="text" class="form-control" name="categoria" value="<?=$categoria?>"><br>
    </div>
    <div class="mb-3">
      <label class="form-label" >Descrição:</label>
      <textarea class="form-control" name="descricao" rows="4"><?= htmlspecialchars($descricao) ?></textarea><br>
    </div>

      <input type="submit" class="btn btn-success w-100 mt-3" value=" Alterar Produto"></input>
  </form>
  </div>
</div>

<?php 
  }else{
    echo "<div class='alert alert-info'>Nenhum produto cadastrado!</div>";
  }
?>