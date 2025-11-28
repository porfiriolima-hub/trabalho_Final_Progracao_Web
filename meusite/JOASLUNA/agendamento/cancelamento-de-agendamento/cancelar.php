<?php
    require_once "JOASLUNA/conexao.inc.php";

    if($conexao) {


        if(isset($_GET["email"]) && isset($_GET["posicao"])){

            $email = $_GET["email"];
            $posicao = $_GET["posicao"];

        } else {
            operac(
                "
                Nenhum agendamento.<br>
                <div class='button'>
                    <a href='?pg=JOASLUNA/agendamento/pagina-de-acompanhamento'>
                        <button>Voltar para acompanhamento</button>
                    </a>            
                </div>                
                "
            );
        }       

        
        mysqli_select_db($conexao, "projeto1");


        $resultado = mysqli_query(
            $conexao,
            "DELETE FROM `agendamentos_cadastrados`
            WHERE `E-Mail` = '$email' AND `Posicao` = '$posicao';"
        );     


    } else {

        operac("Não foi possível conectar ao Banco de Dados.");

    }
?>

<?php if($resultado): ?>



    <?php if(mysqli_affected_rows($conexao) === 1): ?>

        <?php header("Location: ?pg=JOASLUNA/agendamento/cancelamento-de-agendamento/cancel-table"); ?>

    <?php elseif(mysqli_affected_rows($conexao) === 0): ?>

        <?php operac("Acesso negado!"); ?>

    <?php else: ?>

        <?php operac("Erro na execução: ".mysqli_error($conexao)); ?>

    <?php endif; ?>



<?php else: ?>

    <?php operac("Erro na execução: ".mysqli_error($conexao)); ?>

<?php endif; ?>


<?php mysqli_close($conexao); ?>