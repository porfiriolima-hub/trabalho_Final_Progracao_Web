<?php
    require_once "JOASLUNA/conexao.inc.php";

    if($conexao) {
        
        mysqli_select_db($conexao, "projeto1");


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
                            <td><?php echo $linha['E-Mail']; ?></td>
                            <td><?php echo $linha['Prazo_Marcado']; ?></td>
                        </tr>                        
                    </div>
                <?php endwhile; ?>
            </tbody>
        </table>
        
        <div style="margin: 21px; justify-self: center;">
            <a href="?pg=JOASLUNA/agendamento/pagina-de-acompanhamento">
                <button style="background-color: aqua;">Voltar para acompanhamento</button>
            </a>            
        </div>



    <?php else:?>

        <p>Nenhum agendamento cadastrado.</p>

    <?php endif;?>

<?php else:?>

    <p>Erro na execução.</p>

<?php endif;?>