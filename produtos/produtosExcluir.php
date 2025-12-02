<?php
require 'config.inc.php';


if (!isset($_GET['id'])) {
echo "ID do produto não informado.";
exit;
}


$id = intval($_GET['id']);


$sql = "SELECT imagem FROM produtos WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$produto = $result->fetch_assoc();


if (!$produto) {
echo "Produto não encontrado.";
exit;
}


if (!empty($produto['imagem'])) {
$caminhoImagem = "uploads/" . $produto['imagem'];
if (file_exists($caminhoImagem)) {
unlink($caminhoImagem);
}
}


$sql = "DELETE FROM produtos WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);


if ($stmt->execute()) {
echo "<script>alert('Produto excluído com sucesso!'); window.location.href='produtos_index.php';</script>";
} else {
echo "Erro ao excluir produto: " . $conn->error;
}
?>