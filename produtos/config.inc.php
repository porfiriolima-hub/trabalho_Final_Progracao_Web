<?php
$host = "localhost";
$dbname = "barbearia";
$user = "root";
$pass = "";


define('UPLOAD_PATH', __DIR__ . '/uploads/');


try {
$pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
die("Erro ao conectar ao banco de dados: " . $e->getMessage());
}
?>