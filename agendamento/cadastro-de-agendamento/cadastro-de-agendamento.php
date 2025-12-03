<?php
    require_once "conexao.inc.php";


    if($conexao){


        $data = $_POST["data"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];


        mysqli_select_db($conexao, "barbearia");


        $resultado = mysqli_query(
            $conexao,
            "SELECT `id` FROM `usuarios` WHERE `email` = '$email' AND `senha` = '$senha';"
        );
        if($resultado){
            if(mysqli_num_rows($resultado) === 0){
                operac("Acesso negado.");
            }
        } else {
            operac("Erro na execução: " . mysqli_error($conexao));
        }


        $resultado = mysqli_query(
            $conexao,
            "INSERT INTO `agendamentos_cadastrados` (`email`, `Prazo_Marcado`)
            VALUES ('$email', '$data');"
        );


        if($resultado){


            if(mysqli_affected_rows($conexao) === 1){
                header("Location: ?pg=agendamento/fila-de-agendamento");
                exit;
            } else if(mysqli_affected_rows($conexao) === 0){
                echo "Acesso negado!";
                exit;
            } else {
                echo "Erro ao agendar serviço.";
                exit;
            }


        } else {

            echo "Erro na execução.";
            exit;

        }


    } else {

        echo "Falha na conexão.";
        exit;

    }
?>