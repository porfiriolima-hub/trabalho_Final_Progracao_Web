<?php
require 'config.inc.php';

$id = $_GET['id'];

$sql = "DELETE FROM servicos WHERE id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$id]);

header("Location: servicosAdmin.php");
exit;
?>
