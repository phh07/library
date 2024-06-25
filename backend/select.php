<?php
session_start();
require_once "login.php";
$pdo = require "Conexao.php";

$email = $_SESSION['email'];


$sql = 'SELECT * FROM usuarios a INNER JOIN livros b ON a.email = b.user_email WHERE b.user_email = :email;';

$stmt = $pdo->prepare($sql);
$stmt->execute([
    ':email' => $_SESSION['email']
]);

$resultado = $stmt->fetchAll();

return $resultado;


