<?php 
    $conexao = mysqli_connect("127.0.0.1:3310", "root", "");

    function operac($msg){
        global $conexao;
        echo $msg;
        mysqli_close($conexao);
        exit;
    }
?>