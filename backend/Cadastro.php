<?php

$name = $_POST['name'];
$email = $_POST['email'];
$passwordCad = password_hash($_POST['password'], PASSWORD_DEFAULT);
$passwordConf = password_hash($_POST['password-confirm'], PASSWORD_DEFAULT);

if ($passwordCad !== $passwordConf) {
    echo "<script> window.alert('senha incorreta!')</script>";
}else {
    $passwordCad = $passwordConf;

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
    header("Location: ..{$c}src{$c}login{$c}index.html");
} else {
    $c = DIRECTORY_SEPARATOR;
    header("Location: ..{$c}src{$c}register{$c}cadastro.html");
}

}

