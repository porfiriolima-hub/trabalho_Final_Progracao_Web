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
                "INSERT INTO `usuarios` (`E-Mail`, `Senha`, `Tipo_de_Conta`) VALUES ('$email', '$senha', '$tipo_de_conta'))"
            );
            if($resultado && $tipo_de_conta === 'ComomUser'){
                echo "Usuário registrado com sucesso!";
                exit;
            } else if($resultado && $tipo_de_conta === 'Admin'){
                header("Location: ?pg=sistema");
                exit;
            } else {
                echo "Erro ao registrar usuário.";
                exit;
            }
        } else {
            echo "Erro na conexão com o banco de dados.";
            exit;
        }
    } else {
        echo "Método de requisição inválido.";
        exit;
    }   
?>