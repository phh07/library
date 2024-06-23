<?php

session_start();
    if (!empty($_POST['email']) && !empty($_POST['password'])) {

        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $sql = "SELECT * FROM usuarios WHERE email = ?";
        require_once "Conexao.php";

        $pdo = Conexao::conectar("../config/config.ini");

        $stmt = $pdo->prepare($sql);
        $stmt->execute([$email]);
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

        if (password_verify($_POST['$password'], $usuario['password'])) {
            if (count($usuario) != "0") {
                $_SESSION['email'] = $email;
                $_SESSION['password'] = $password;
                
                $b = DIRECTORY_SEPARATOR;
                header("location: ..{$b}src{$b}library{$b}library.html");
            }
        }else {
            unset($_SESSION['email']);
            unset($_SESSION['password']);
            $b = DIRECTORY_SEPARATOR;
            header("location: ..{$b}src{$b}login{$b}index.html");
            echo "<script>window.alert('senha incorreta!')</script>";
        }

} 