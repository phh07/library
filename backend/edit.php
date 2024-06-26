<?php
require_once "saveEdit.php";

if (isset($_GET["id"])) {
    $id = $_GET["id"];
} else {
    // Handle the case where "id" is not set
    header("Location: ../src/library/library.php");
    exit;
}

$pdo = require_once "Conexao.php";

$sql = "SELECT * FROM livros WHERE id=:id";
$stmt = $pdo->prepare($sql);
$stmt->execute([":id" => $id]);
$dados = $stmt->fetch(PDO::FETCH_ASSOC);

if ($dados) {
    $capa = $dados["capa"];
    $autor = $dados["autor"];
    $titulo = $dados["titulo"];
    $subtitulo = $dados["subtitulo"];
    $edicao = $dados["edicao"];
    $editora = $dados["editora"];
    $ano = $dados["ano"];
} else {
    // Trata o caso em que não há dados para o livro
    header("Location: ../src/library/library.php");
    exit;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../src/library/addBook.css">
    <title>Editar-livro</title>
</head>
<body>
    <header class="header">
        <a href="#" class="logo">
            <ion-icon name="library-outline"></ion-icon>gerenciador de livros
        </a>

        <nav class="nav">
            <a href="../src/library/library.php">voltar</a>
            <a href="../../backend/logout.php">sair</a>
        </nav>
    </header>
    <section class="home"> 
        <div class="box">
            <h2>adicionar livro</h2>
            <form action='./saveEdit.php' method="post" enctype="multipart/form-data">
                <div class="input-box">
                    <label for="capa">capa do livro</label>
                    <input type="file" name="capa" id="capa" value="<?php echo"$capa";?>">

                    <label for="autor">autor</label>
                    <input type="text" name="autor" id="autor" value="<?php echo"$autor";?>">

                    <label for="titulo">titulo</label>
                    <input type="text" name="titulo" id="titulo" value="<?php echo"$titulo";?>">

                    <label for="subtitulo">subtitulo</label>
                    <input type="text" name="subtitulo" id="subtitulo" value="<?php echo"$subtitulo";?>">

                    <label for="edicao">edição</label>
                    <input type="text" name="edicao" id="edicao" value="<?php echo"$edicao";?>">

                    <label for="editora">editora</label>
                    <input type="text" name="editora" id="editora" value="<?php echo"$editora";?>">

                    <label for="ano">ano de lançamento</label>
                    <input type="number" name="ano" id="ano" value="<?php echo"$ano";?>">
                </div>
                <input name="update" type="submit" value="Salvar" class="btn-save">
            </form>
        </div>
    </section>


    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="pass-eye-reg.js"></script>
</body>
</html>