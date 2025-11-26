<?php
require 'config.inc.php';


if (!isset($_GET['id'])) {
die('ID do produto não informado.');
}


$id = $_GET['id'];


$sql = "DELETE FROM produtos WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();


header('Location: produtosAdmin.php');
exit;
?>