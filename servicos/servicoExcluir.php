<?php
require 'config.inc.php';

$id = intval($_GET['id']);

$conn->query("DELETE FROM servicos WHERE id=$id");

header("Location: servicosAdmin.php");
exit;
?>