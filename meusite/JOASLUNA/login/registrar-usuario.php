<?php
    require_once "JOASLUNA/conexao.inc.php";


    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        if($conexao) {
            mysqli_select_db($conexao, "projeto1");


            $tipo_de_conta = $_POST['tipo-de-conta'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            

            $resultado = mysqli_query(
                $conexao,
                "INSERT INTO `usuarios` (`E-Mail`, `Senha`, `Tipo_de_Conta`) 
                SELECT '$email', '$senha', '$tipo_de_conta' 
                WHERE NOT EXISTS (SELECT 1 FROM `usuarios` WHERE `E-Mail` = '$email');"
            );


            if($resultado){

                    if(mysqli_affected_rows($conexao) === 0){

                        operac("E-Mail já cadastrado. Por favor, utilize outro E-Mail.");                        

                    } else if(mysqli_affected_rows($conexao) === 1){


                        if($tipo_de_conta === 'ComomUser'){
                            header("Location: ?pg=JOASLUNA/agendamento/pagina-de-acompanhamento");
                            exit;
                        } else if($tipo_de_conta === 'Admin'){
                            header("Location: ?pg=sistema");
                            exit;
                        } else {
                            operac("Tipo de conta inválida.");
                        }


                    } else {

                        operac("Erro ao registrar usuário.");

                    }
            } else {

                operac("Erro na consulta ao banco de dados.");

            }
        } else {

            operac("Erro na conexão com o banco de dados.");

        }
    } else {

        operac("Método de requisição inválido.");

    }
?>