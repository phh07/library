<?php
    if (!empty($_POST['email']) && !empty($_POST['password'])) {

        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM usuarios WHERE email = ?";
        require_once "Conexao.php";

        $pdo = require "Conexao.php";

        $stmt = $pdo->prepare($sql);
        $stmt->execute([$email]);
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

        if (password_verify($_POST['password'], $usuario['password'])) {
            if (count($usuario) != "0") {
                if(!isset($_SESSION)) {
                    session_start();
                }
                $_SESSION['email'] = $email;
                $_SESSION['password'] = $password;
                
                $b = DIRECTORY_SEPARATOR;
                header("location: ..{$b}src{$b}library{$b}library.php");
            }
        }else {
            unset($_SESSION['email']);
            unset($_SESSION['password']);
            $b = DIRECTORY_SEPARATOR;
            header("location: ..{$b}src{$b}login{$b}index.php");
            echo "<script>window.alert('senha incorreta!')</script>";
        }

} 