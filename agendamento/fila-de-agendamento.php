<?php
    require_once "conexao.inc.php";

    if($conexao) {
        
        mysqli_select_db($conexao, "barbearia");


        $resultado = mysqli_query(
            $conexao,
            "SELECT * FROM `agendamentos_cadastrados`;"
        );


    } else {

        operac("Não foi possível conectar ao Banco de Dados.");

    }
?>

<?php if($resultado):?>

    <?php if(mysqli_num_rows($resultado) > 0):?>


        <div>
            <table>
                <thead>
                    <tr>
                        <th>Posição</th>
                        <th>E-Mail</th>
                        <th>Prazo Marcado</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($linha = mysqli_fetch_array($resultado)): ?>
                        <div>
                            <tr>
                                <td><?php echo $linha['Posicao']; ?></td>
                                <td><?php echo $linha['email']; ?></td>
                                <td><?php echo $linha['Prazo_Marcado']; ?></td>
                            </tr>                        
                        </div>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
        
        <div class="button">
            <a href="?pg=pagina-de-acompanhamento">
                <button>Voltar para acompanhamento</button>
            </a>            
        </div>


    <?php else:?>

        <div class="button">
            <a href="?pg=pagina-de-acompanhamento">
                <button>Voltar para acompanhamento</button>
            </a>            
        </div>

        <?php operac("Nenhum agendamento cadastrado."); ?>

    <?php endif;?>

<?php else:?>

    <div class="button">
        <a href="?pg=pagina-de-acompanhamento">
            <button>Voltar para acompanhamento</button>
        </a>            
    </div>

    <?php operac("Erro na execução."); ?>

<?php endif;?>

<?php mysqli_close($conexao); ?>