<?php
require 'config.inc.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$id = $_POST['id'];
$nome = $_POST['nome'];
$preco = $_POST['preco'];
$descricao = $_POST['descricao'];
$estoque = $_POST['estoque'];


$sql = "UPDATE produtos SET nome = ?, preco = ?, descricao = ?, estoque = ? WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sdsii", $nome, $preco, $descricao, $estoque, $id);
$stmt->execute();


header('Location: produtosAdmin.php');
exit;
}
?>