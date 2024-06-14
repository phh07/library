<?php

$name = $_POST['name'];
$email = $_POST['email'];
$passwordCad = PASSWORD_DEFAULT(password_hash($_POST['password']));
$passwordConf = $_POST['password-confirm'];

if ($passwordCad !== $passwordConf) {
    echo "<script> window.alert('senha incorreta!')</script>";
}else {
    $passwordCad = $passwordConf;
}

require_once "Conexao.php";

$sql = "INSERT INTO usuarios(name, password, email)" .
        "VALUES( :name, :password, :email)";


$pdo = Conexao::conectar("../config/config.ini");

$stmt = $pdo->prepare($sql);

$resultado = $stmt->execute([
    ':name' => $name,
    ':password' => $passwordCad,
    ':email' => $email
]);

if ($resultado) {
    $c = DIRECTORY_SEPARATOR;
    header('Location: src{$c}login{$c}index.html');
} else {
    $c = DIRECTORY_SEPARATOR;
    header('Location: src{$c}register{$c}cadastro.html');
}
