<?php

if (!empty($_GET['id'])) {
    $pdo = require_once "Conexao.php";

    $id = $_GET['id'];

    $sqlSelect = "SELECT * FROM livros WHERE id = :id";
    $stmt = $pdo->prepare($sqlSelect);
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    $resultado = $stmt->fetch(PDO::FETCH_ASSOC);

    if (count($resultado) != 0) {
        $sqlDelete = "DELETE FROM livros WHERE id = :id";
        $stmt = $pdo->prepare($sqlDelete);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        // Não é necessário fetchAll() aqui, pois você não precisa dos resultados da consulta DELETE
    }
}
$b = DIRECTORY_SEPARATOR;
header("location:..{$b}src{$b}library{$b}library.php");