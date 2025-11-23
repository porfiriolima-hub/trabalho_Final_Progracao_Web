<?php
    require_once "../conexao.inc.php";


    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        if($conexao) {
            mysqli_select_db($conexao, "projeto1");

            $tipo_de_conta = $_POST['tipo-de-conta'];
            
            $resultado = mysqli_query(
                $conexao,
                "SELECT * FROM `$tipo_de_conta`"
            );

            if($resultado){
                if(mysqli_num_rows($resultado) > 0) {
                    $achou = false;
                    while ($linha = mysqli_fetch_array($resultado)) {
                        if ($linha["email"] === $_POST["email"] && $linha["senha"] === $_POST["senha"]) {
                            $achou = true;
                            include_once "../../sistema.php";
                            break;
                        }
                    }
                    if (!$achou) {
                        include_once "entrar.php";
                        echo "<br><br><h3>Email ou senha incorretos. (¬_¬)</h3>";
                    }
                } else {
                    echo "Conta não cadastrada. (╯°□°）╯︵ ┻━┻";
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