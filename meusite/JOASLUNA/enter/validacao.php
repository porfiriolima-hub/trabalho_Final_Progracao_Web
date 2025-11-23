<?php
    require_once "JOASLUNA/conexao.inc.php";


    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        if($conexao) {
            mysqli_select_db($conexao, "projeto1");

            $tipo_de_conta = $_POST['tipo-de-conta'];
            $email = $_POST["email"];
            $senha = $_POST["senha"];
            
            $resultado = mysqli_query(
                $conexao,
                "SELECT * FROM `usuarios` WHERE `E-Mail` = '$email' AND `Senha` = '$senha' AND `Tipo_de_Conta` = '$tipo_de_conta'"
            );

            if($resultado){
                if(mysqli_num_rows($resultado) > 0) {
                    if($tipo_de_conta === 'ComomUser'){
                        header("Location: ?pg=sistema");
                        exit;
                    } else if($tipo_de_conta === 'Admin'){
                        header("Location: ?pg=sistema");
                        exit;
                    }
                    
                } else {
                    header("Location: ?pg=JOASLUNA/enter/entrar&tipo-de-conta=$tipo_de_conta");
                    exit;
                }
            } else {
                echo "OPERAÇÃO FALHOU. T_T";
            }
        } else {
            echo "Erro na conexão com o banco de dados. (┬┬﹏┬┬)";
        }
    } else {
        echo "Método de requisição inválido. >:/";
    }
?>