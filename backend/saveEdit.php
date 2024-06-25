<?php

require_once "Conexao.php";

if (!empty($_GET["id"])) {

    $pdo = require_once "Conexao.php";

    $id = $_GET["id"];

    $sql = "SELECT * FROM livros WHERE id=:id";

    $stmt = $pdo->prepare($sql);

    $result = $stmt->execute([
        ":id" => $id
    ]);

    $dados = $stmt->fetch(PDO::FETCH_ASSOC);

    if($dados) {

        $autor = $dados["autor"];
        $titulo = $dados["titulo"];
        $subtitulo = $dados["subtitulo"];
        $edicao = $dados["edicao"];
        $editora = $dados["editora"];
        $ano = $dados["ano"];

    } else {
        header("Location: ../src/library/library.php");
    }

}

if (isset($_POST["editar"])) {

    $autor = $_POST["autor"];
    $titulo = $_POST["titulo"];
    $subtitulo = $_POST["subtitulo"];
    $edicao = $_POST["edicao"];
    $editora = $_POST["editora"];
    $ano = $_POST["ano"];

    $pdo = require "Conexao.php";

    $sql = "UPDATE livros SET autor='$autor', titulo='$titulo', subtitulo='$subtitulo', edicao='$edicao', editora='$editora', ano='$ano' WHERE id='$id'";

    $stmt = $pdo->prepare($sql);

    $qtdLinhas = $stmt->execute();

    header("Location: ../src/library/library.php");
}