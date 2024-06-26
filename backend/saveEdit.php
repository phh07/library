    <?php

    if (isset($_POST["update"])) {
        $id = $_GET["id"];
        $autor = $_POST["autor"];
        $titulo = $_POST["titulo"];
        $subtitulo = $_POST["subtitulo"];
        $edicao = $_POST["edicao"];
        $editora = $_POST["editora"];
        $ano = $_POST["ano"];

        $sql = "UPDATE livros SET autor=:autor, titulo=:titulo, subtitulo=:subtitulo, edicao=:edicao, editora=:editora, ano=:ano WHERE id=:id";
        $pdo = require_once "Conexao.php";


        $stmt = $pdo->prepare($sql);

        try {
            $stmt->execute([
                ':autor' => $autor,
                ':titulo' => $titulo,
                ':subtitulo' => $subtitulo,
                ':edicao' => $edicao,
                ':editora' => $editora,
                ':ano' => $ano,
                ':id' => $id
            ]);

            header("Location:..\src\library\library.php");
        } catch (PDOException $e) {
            echo "Erro ao atualizar livro: ". $e->getMessage();
        }
    }