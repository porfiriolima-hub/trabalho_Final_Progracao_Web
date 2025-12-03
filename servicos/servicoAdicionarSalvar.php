<?php
require 'config.inc.php';

$nome = $_POST['nome'];
$preco = $_POST['preco'];
$descricao = $_POST['descricao'];

$sql = "INSERT INTO servicos (nome, preco, descricao) VALUES ('$nome', '$preco', '$descricao')";
$conn->query($sql);

header("Location: servicosAdmin.php");
exit;
?>