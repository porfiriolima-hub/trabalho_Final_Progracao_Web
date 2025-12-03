<?php
require 'config.inc.php';

$id = $_POST['id'];
$nome = $_POST['nome'];
$preco = $_POST['preco'];
$descricao = $_POST['descricao'];

$sql = "UPDATE servicos 
        SET nome='$nome', preco='$preco', descricao='$descricao'
        WHERE id=$id";

$conn->query($sql);

header("Location: servicosAdmin.php");
exit;
?>