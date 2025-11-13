<?php 

    require_once "config.inc.php";
    $sql = "SELECT * FROM clientes";

    $resultado = mysqli_query($conexao, $sql);

    echo "<div class='container mt-4'>";
    echo "<h2 class='mb-4'>Lista de Clientes</h2>";
   

    if(mysqli_num_rows($resultado)>0) {
      echo "<table class='table table-bordered table-hover'>";
      echo "<thead class='table-dark'><tr>
            <th>ID</th><th>Clientes</th><th>Cidade</th><th>Estado</th>
            <th>Ações</th>
            </tr></thead><tbody>";

      while($dados = mysqli_fetch_array($resultado)) {
         echo "<tr>
            <td>{$dados['id']}</td>
            <td>{$dados['cliente']}</td>
            <td>{$dados['cidade']}</td>
            <td>{$dados['estado']}</td>
            <td>
              <a href='?pg=admin/clientes-form-alterar&id={$dados['id']}' class='btn btn-warning btn-sm'>Editar</a>
              <a href='?pg=admin/clientes-excluir&id={$dados['id']}' class='btn btn-danger btn-sm'>Excluir</a>
            </td>
          </tr>";
  
        
      }
      echo "</tbody></table>";
      echo "<a href='?pg=admin/index' class='btn btn-outline-primary'>Voltar</a>";
    }else{
        
        echo "<div class='alert alert-info'>Nenhum cliente cadastrado!</div>";
      }
    echo "</div>";