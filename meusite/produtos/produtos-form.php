<div class="container mt-5">
  <div class="card shadow-sm p-4">
    <h2 class="text-center text-primary">Cadastro de Produtos</h2>
    <form action="?pg=produtos/produtos-cadastro" method="post">

  <div class="mb-3">
    <label class="form-label">Produto:</label>
    <input type="text" class="form-control" name="produto"><br>
  </div>
  <div class="mb-3">
    <label class="form-label">Preço:</label>
    <input type="number" class="form-control" name="preco"><br>
  </div>
  <div class="mb-3">
    <label class="form-label" >Estoque:</label>
    <input type="number" class="form-control" name="estoque"><br>
  </div>
  <div class="mb-3">
    <label class="form-label" >Categoria:</label>
    <input type="text" class="form-control" name="categoria"><br>
  </div>
  <div class="mb-3">
    <label class="form-label" >Descrição:</label>
    <textarea class="form-control" name="descricao"></textarea><br>
  </div>

    <input type="submit" class="btn btn-success w-100 mt-3" value="Cadastrar Produto"></input>
    </form>
  </div>
</div>