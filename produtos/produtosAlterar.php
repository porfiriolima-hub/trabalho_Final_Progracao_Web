<?php
require 'config.inc.php';


if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
die("Acesso inválido!");
}


$id = $_POST['id'];
$nome = $_POST['nome'];
$preco = $_POST['preco'];
$descricao = $_POST['descricao'];
$estoque = $_POST['estoque'];


$sql = "SELECT imagem FROM produtos WHERE id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$id]);
$produtoAtual = $stmt->fetch(PDO::FETCH_ASSOC);


$imagemAtual = $produtoAtual['imagem'];
$novoCaminho = $imagemAtual;


if (!empty($_FILES['imagem']['name'])) {
$arquivo = $_FILES['imagem'];
$nomeArquivo = time() . '-' . basename($arquivo['name']);
$destino = 'uploads/' . $nomeArquivo;


if (move_uploaded_file($arquivo['tmp_name'], UPLOAD_PATH . $nomeArquivo)) {
$novoCaminho = $destino;


if (!empty($imagemAtual) && file_exists($imagemAtual)) {
unlink($imagemAtual);
}
}
}


$sql = "UPDATE produtos SET nome = ?, preco = ?, descricao = ?, estoque = ?, imagem = ? WHERE id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$nome, $preco, $descricao, $estoque, $novoCaminho, $id]);


header("Location: produtosAdmin.php");
exit;
?>