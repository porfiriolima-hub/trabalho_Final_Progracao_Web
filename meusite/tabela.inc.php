
<table class="table">
  <thead>
      <tr>
        <th>Nome</th>
        <th>Cidade</th>
        <th>Estado</th>
      </tr>
  </thead>
  </tbody>
    <?php
      while($dados = mysqli_fetch_array($resultado)):
    ?>
    <tr>
      <td><?=$dados['cliente']?></td>
      <td><?=$dados['cidade']?></td>
      <td><?=$dados['estado']?></td>
    </tr>      
    <?php endwhile;?>
  </tbody>
</table>