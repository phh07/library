<?php

$name = $_POST['name'];
$email = $_POST['email'];
$passwordCad = $_POST['password'];
$passwordConf = $_POST['password-confirm'];

if ($passwordCad !== $passwordConf) {
    echo "<script> window.alert('senha incorreta!')</script>";
    $c = DIRECTORY_SEPARATOR;
    header("location:..{$c}src{$c}register{$c}cadastro.php");
}else {
    $passwordCad = password_hash($passwordConf, PASSWORD_DEFAULT);

    require_once "Conexao.php";

$sql = "INSERT INTO usuarios(name, password, email)" .
        "VALUES( :name, :password, :email)";


$pdo = require "Conexao.php";

$stmt = $pdo->prepare($sql);

$resultado = $stmt->execute([
    ':name' => $name,
    ':password' => $passwordCad,
    ':email' => $email
]);

if ($resultado) {
    $c = DIRECTORY_SEPARATOR;
    header("Location: ..{$c}src{$c}login{$c}index.php");
} else {
    $c = DIRECTORY_SEPARATOR;
    header("Location: ..{$c}src{$c}register{$c}cadastro.php");
}

}

