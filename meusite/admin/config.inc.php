<?php
$conexao = mysqli_connect('127.0.0.1', 'root', '', 'projeto1');

// Verifica erro de conexão
if(mysqli_connect_errno()){
    die("Erro ao conectar ao banco de dados: " . mysqli_connect_error());
}

// Define charset para evitar bugs com acentos
mysqli_set_charset($conexao, "utf8mb4");
?>
