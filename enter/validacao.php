<?php
    require_once "conexao.inc.php";


    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        if($conexao) {
            mysqli_select_db($conexao, "barbearia");


            $tipo_de_conta = $_POST['tipo-de-conta'];
            $email = $_POST["email"];
            $senha = $_POST["senha"];
            

            $resultado = mysqli_query(
                $conexao,
                "SELECT * FROM `usuarios` WHERE `email` = '$email' AND `senha` = '$senha' AND `tipo_de_conta` = '$tipo_de_conta'"
            );


            if($resultado){

                if(mysqli_num_rows($resultado) > 0) {


                    if($tipo_de_conta === 'ComomUser'){
                        header("Location: ?pg=pagina-de-acompanhamento");
                        exit;
                    } else if($tipo_de_conta === 'Admin'){
                        header("Location: ?pg=sistema");
                        exit;
                    } else {
                        operac("Erro: Tipo de conta desconhecido. (╯°□°）╯︵ ┻━┻");
                    }


                } else {

                    header("Location: ?pg=enter/entrar&tipo-de-conta=$tipo_de_conta");
                    exit;

                }
            } else {

                operac("Erro na execução da consulta. (╯°□°）╯︵ ┻━┻");

            }
        } else {
            
            operac("Erro na conexão com o banco de dados. (╯°□°）╯︵ ┻━┻");

        }
    } else {

        operac("Método de requisição inválido. (╯°□°）╯︵ ┻━┻");

    }
?>