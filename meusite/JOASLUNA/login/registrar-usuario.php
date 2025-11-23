<?php
    require_once "../conexao.inc.php";


    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        if($conexao) {
            mysqli_select_db($conexao, "projeto1");

            $tipo_de_conta = $_POST['tipo-de-conta'];
            
            $resultado = mysqli_query(
                $conexao,
                "INSERT INTO `$tipo_de_conta` (`E-Mail`, `Senha`) VALUES ('$_POST[email]', '$_POST[senha]')"
            );

            if($resultado){
                echo "Usuário registrado com sucesso!";
            } else {
                echo "Erro ao registrar usuário.";
            }
        } else {
            echo "Erro na conexão com o banco de dados.";
        }
    } else {
        echo "Método de requisição inválido.";
    }   
?>