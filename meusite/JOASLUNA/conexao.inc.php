<?php 
    $conexao = mysqli_connect("localhost:3306", "root", "");

    function operac($msg){
        global $conexao;
        echo $msg;
        mysqli_close($conexao);
        exit;
    }
?>