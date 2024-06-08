<?php

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$pdo = require_once "conexao.php";

$sql = "INSERT INTO usuarios(name, email, password)" .
        "VALUES( :name, :email, :password)";

$stmt = $pdo->prepare($sql);

$linhas = $stmt->execute([
    ':name' => $name,
    ':email' => $email,
    ':password' => $password
]);