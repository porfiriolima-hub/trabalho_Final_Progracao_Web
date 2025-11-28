<?php
    require_once "JOASLUNA/conexao.inc.php";

    if($conexao) {


        $email = $_POST["email"];
        $senha = $_POST["senha"];

        
        mysqli_select_db($conexao, "projeto1");


        $resultado = mysqli_query(
            $conexao,
            "SELECT `a`.*, `u`.*
            FROM `agendamentos_cadastrados` AS `a`
            JOIN `usuarios` AS `u` ON `u`.`E-Mail` = `a`.`E-Mail`
            WHERE `u`.`E-Mail` = '$email' AND `u`.`Senha` = '$senha';"
        );


    } else {

        operac("Não foi possível conectar ao Banco de Dados.");

    }
?>

<?php if($resultado): ?>

    <?php if(mysqli_num_rows($resultado) > 0): ?>

        <div>
            <table>
                <thead>
                    <tr>
                        <th>Posição</th>
                        <th>E-Mail</th>
                        <th>Data</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($linha = mysqli_fetch_array($resultado)): ?>
                    <tr>
                        <td><?= $linha["Posicao"] ?></td>
                        <td><?= $linha["E-Mail"] ?></td>
                        <td><?= $linha["Prazo_Marcado"] ?></td>
                        <td>
                            <a href="
                                    ?pg=JOASLUNA/agendamento/cancelamento-de-agendamento/cancelar
                                    &email=<?= $linha["E-Mail"] ?>&posicao=<?= $linha["Posicao"] ?>
                                    "
                            ><button>Cancelar</button></a>
                        </td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>

    <?php else: ?>

        <div class="button">
            <a href="?pg=JOASLUNA/agendamento/pagina-de-acompanhamento">
                <button>Voltar para acompanhamento</button>
            </a>            
        </div>

        <?php operac("Nenhum cadastro de agendamento!"); ?>

    <?php endif; ?>

<?php else: ?>

    <div class="button">
        <a href="?pg=JOASLUNA/agendamento/pagina-de-acompanhamento">
            <button>Voltar para acompanhamento</button>
        </a>            
    </div>

    <?php operac("Erro na execução: ".mysqli_error($conexao)); ?>

<?php endif; ?>

<?php mysqli_close($conexao); ?>