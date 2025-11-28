<?php
    require_once "JOASLUNA/conexao.inc.php";

    if($conexao) {
        

        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $novo_prazo = $_POST["novo-prazo"];
        

        mysqli_select_db($conexao, "projeto1");


        $resultado = mysqli_query(
            $conexao,
            "SELECT * FROM `agendamentos_cadastrados`;"
        );


    } else {

        operac("Não foi possível conectar ao Banco de Dados.");

    }

    mysqli_close($conexao);
?>