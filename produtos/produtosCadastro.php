<?php
require 'config.inc.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$nome = $_POST['nome'];
$preco = $_POST['preco'];
$descricao = $_POST['descricao'];
$estoque = $_POST['estoque'];


$sql = "INSERT INTO produtos (nome, preco, descricao, estoque) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sdsi", $nome, $preco, $descricao, $estoque);
$stmt->execute();


header('Location:produtosForm.php');
exit;

}
?>