<?php
    require_once "JOASLUNA/conexao.inc.php";


    session_start();


    if($conexao){

        mysqli_select_db($conexao, "projeto1");


        $email = $_SESSION["email"];
        $posicoes = $_POST["posicoes"];
        $novos_prazos = $_POST["novos-prazos"];


        for($indice = 0; $indice < count($posicoes); $indice++) {

            $posicao = $posicoes[$indice];
            $novo_prazo = $novos_prazos[$indice];


            mysqli_query(
                $conexao,
                "UPDATE `agendamentos_cadastrados`
                SET `Prazo_Marcado` = '$novo_prazo'
                WHERE `E-Mail` = '$email' AND `Posicao` = '$posicao';"
            );
        }


        header("Location: ?pg=JOASLUNA/agendamento/alteracoes-no-agendamento/alterar-agendamento-form-table");
        exit;

    } else {

        operac("Falha ao estabelecer conexão.");

    }
?>