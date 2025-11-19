<?php require_once "admin/config.inc.php";?>

<?php if($conexao):?>
    <?php $resultado = mysqli_query($conexao, "SELECT * FROM produtos");?>
    <?php if($resultado):?>
        <?php if(mysqli_num_rows($resultado) > 0):?>
            <?="<h2>Nossos Produtos:</h2>"?>
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
                        while($dados = mysqli_fetch_array($resultado)):
                    ?>
                        <tr>
                            <td><?=$dados['produto']?></td>
                            <td><?=$dados['preco']?></td>
                            <td><?=$dados['estoque']?></td>
                            <td><?=$dados['categoria']?></td>
                            <td><?=$dados['descricao']?></td>
                        </tr> 

                    <?php endwhile;?>
                </tbody>
            </table>
        <?php else:?>
            <?="<h2>Nenhum produto cadastrado</h2>"?>
        <?php endif;?>

    <?php else:?>
        <?="OPERAÇÃO MAL-SUCEDIDA"?>
    <?php endif;?>

<?php else:?>
    <?="<h2>Erro ao conectar o banco de dados</h2>"?>
<?php endif;?>