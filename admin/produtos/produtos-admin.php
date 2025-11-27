<?php 

    require_once "config.inc.php";
    $sql = "SELECT * FROM produtos";

    $resultado = mysqli_query($conexao, $sql);
    
    echo "<div class='container mt-4'>";
    echo "<h2 class='mb-4'>Lista de Produtos</h2>";
   

    if(mysqli_num_rows($resultado)>0) {
      echo "<table class='table table-bordered table-hover'>";
      echo "<thead class='table-dark'><tr>
            <th>ID</th><th>Produto</th><th>Preço</th><th>Estoque</th>
            <th>Categoria</th><th>Descrição</th><th>Ações</th>
            </tr></thead><tbody>";

      while($dados = mysqli_fetch_array($resultado)) {
         echo "<tr>
            <td>{$dados['id']}</td>
            <td>{$dados['produto']}</td>
            <td>R$ {$dados['preco']}</td>
            <td>{$dados['estoque']}</td>
            <td>{$dados['categoria']}</td>
            <td>{$dados['descricao']}</td>
            <td>
              <a href='?pg=produtos/produtos-form-alterar&id={$dados['id']}' class='btn btn-warning btn-sm'>Editar</a>
              <a href='?pg=produtos/produtos-excluir&id={$dados['id']}' class='btn btn-danger btn-sm'>Excluir</a>
            </td>
          </tr>";
  
        
      }
      echo "</tbody></table>";
      echo "<a href='?pg=produtos/index' class='btn btn-outline-primary'>Voltar</a>";
    }else{
        
        echo "<div class='alert alert-info'>Nenhum produto cadastrado!</div>";
      }
    echo "</div>";
