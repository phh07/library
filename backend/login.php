<?php

session_start();
    if (!empty($_POST['email']) && !empty($_POST['password'])) {

        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM usuarios WHERE email = ?";
        require_once "Conexao.php";

        $c = DIRECTORY_SEPARATOR;
        $pdo = Conexao::conectar("..{$c}config{$c}config.ini");

        $stmt = $pdo->prepare($sql);
        $stmt->execute([$email]);
        $usuario = $stmt->fetchObject();
        
        if (!$usuario) {
            echo "<script>window.alert('essa conta não existe!')</script>";
            $b = DIRECTORY_SEPARATOR;
            header("location: ..{$b}src{$b}login{$b}index.html");
        }

        if ($usuario->password == $password) {
            $b = DIRECTORY_SEPARATOR;
            header("location: ..{$b}src{$b}library{$b}library.html");
        }

} 