<?php
    require_once "produtos/config.inc.php";
    $sql = "SELECT * FROM produtos";
    $resultado = mysqli_query($conexao, $sql);
    if (mysqli_num_rows($resultado) > 0){

    echo "<h2>Nossos Produtos</h2>";
?>
<div>
    <table class="table">
        <thead>
            <tr>
              <th>Produto</th>
              <th>Preço</th>
              <th>Estoque</th>
              <th>Categoria</th>
              <th>Descrição</th>
            </tr>
        </thead>
        </tbody>
        <?php
            while($dados = mysqli_fetch_array($resultado)) {
        ?>
        <tr>
          <td><?=$dados['produto']?></td>
          <td><?=$dados['preco']?></td>
          <td><?=$dados['estoque']?></td>
          <td><?=$dados['categoria']?></td>
          <td><?=$dados['descricao']?></td>
        </tr>      
        <?php
            }
        ?>
        
        </tbody>
    </table>    
</div>
<?php  
    }else{
        echo "<h2>Nenhum produto cadastrado</h2>";
    }
 ?>
