<?php
session_start();
require "login.php";

if(isset($_FILES['capa'])) {
    $file = $_FILES['capa'];

    if($file['error']) {
        die("falha ao enviar arquivo");
    }

    if($file['size'] > 2097152) {
        die("Arquivo muito grande MAX: 2mb");
    }

    $pasta = "../arquivos";
    $nome = $file['name'];
    $nome_arquivo = uniqid();
    $extensao = strtolower(pathinfo($nome, PATHINFO_EXTENSION));
    $caminho = $pasta . "/" . $nome_arquivo . "." . $extensao;

    if($extensao != "jpg" && $extensao != "png") {
        die("tipo de arquivo não aceito!");
    }

    $registro = move_uploaded_file($file['tmp_name'], $pasta . "/" . $nome_arquivo . "." . $extensao);

    $autor = $_POST['autor'];
    $titulo = $_POST['titulo'];
    $subtitulo = $_POST['subtitulo'];
    $edicao = $_POST['edicao'];
    $editora = $_POST['editora'];
    $ano = $_POST['ano'];


    $sql = "INSERT INTO livros(capa, autor, titulo, subtitulo, edicao, editora, ano, user_email)" .
    "VALUES(:capa, :autor, :titulo, :subtitulo, :edicao, :editora, :ano, :user_email )";

    $pdo = require "Conexao.php";

    $stmt = $pdo->prepare($sql);

    $result = $stmt->execute([
        ':capa' => $caminho,
        ':autor' => $autor,
        ':titulo' => $titulo,
        ':subtitulo' => $subtitulo,
        ':edicao' => $edicao,
        ':editora' => $editora,
        ':ano' => $ano,
        ':user_email' => $_SESSION['email']
    ]);

    if ($result) {
        print_r("<script>window.alert('livro cadastrado!')</script>");
        $c = DIRECTORY_SEPARATOR;
        header("location: ..{$c}src{$c}library{$c}library.php");
}
}



