<?php
    require_once "conexao.inc.php";


    session_start();


    if($conexao){

        mysqli_select_db($conexao, "barbearia");


        $email = $_SESSION["email"];
        $posicao = $_GET["posicao"];


        $resultado = mysqli_query(
            $conexao,
            "DELETE FROM `agendamentos_cadastrados` WHERE `email` = '$email' AND `Posicao` = '$posicao';"
        );


        header("Location: ?pg=agendamento/alteracoes-no-agendamento/alterar-agendamento-form-table");
        exit;

    } else {

        operac("Falha ao estabelecer conexão.");

    }
?>