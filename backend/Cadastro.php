<?php

$name = $_POST['name'];
$email = $_POST['email'];
$passwordCad = $_POST['password'];
$passwordConf = $_POST['password-confirm'];

if ($passwordCad !== $passwordConf) {
    echo "<script> window.alert('senha incorreta!')</script>";
}else {
    $passwordCad = $passwordConf;
}

$pdo = require_once "conexao.php";

$sql = "INSERT INTO usuarios(name, password, email)" .
        "VALUES( :name, :password, :email)";

$stmt = $pdo->prepare($sql);

$linhas = $stmt->execute([
    ':name' => $name,
    ':password' => $passwordCad,
    ':email' => $email,
]);