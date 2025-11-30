<?php
    require_once "conexao.inc.php";

    if($conexao) {
        

        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $novo_prazo = $_POST["novo-prazo"];
        

        mysqli_select_db($conexao, "barbearia");


        $resultado = mysqli_query(
            $conexao,
            "SELECT * FROM `agendamentos_cadastrados`;"
        );


    } else {

        operac("Não foi possível conectar ao Banco de Dados.");

    }

    mysqli_close($conexao);
?>