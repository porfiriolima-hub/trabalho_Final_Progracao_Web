<?php
require 'config.inc.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$nome = $_POST['nome'];
$preco = $_POST['preco'];
$descricao = $_POST['descricao'];
$estoque = $_POST['estoque'];


$caminhoImagem = null;


if (!empty($_FILES['imagem']['name'])) {
$arquivo = $_FILES['imagem'];
$nomeArquivo = time() . '-' . basename($arquivo['name']);
$destino = 'uploads/' . $nomeArquivo;


if (move_uploaded_file($arquivo['tmp_name'], UPLOAD_PATH . $nomeArquivo)) {
$caminhoImagem = $destino;
}
}


$sql = "INSERT INTO produtos (nome, preco, descricao, estoque, imagem) VALUES (?, ?, ?, ?, ?)";
$stmt = $pdo->prepare($sql);
$stmt->execute([$nome, $preco, $descricao, $estoque, $caminhoImagem]);


header("Location: produtosAdmin.php");
exit;
}
?>