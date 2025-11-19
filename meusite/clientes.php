<?php
    require_once "admin/config.inc.php";

    $resultado = mysqli_query($conexao, "SELECT * FROM clientes");
    if (mysqli_num_rows($resultado) > 0){
        echo "<h2>Nossos Clientes:</h2><br>";
        include_once "tabela.inc.php";
    }else{
        echo "<h2>Nenhum Cliente cadastrado</h2>";
    }