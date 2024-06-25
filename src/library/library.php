<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./llibrary.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>library-painel</title>
</head>
<body>
    <header class="header">
        <a href="#" class="logo">
            <ion-icon name="library-outline"></ion-icon>gerenciador de livros
        </a>

        <nav class="nav">
            <a href="../../backend/logout.php">sair</a>
        </nav>
    </header>
    <section class="home">

        <section class="container-xl">
            <div class="my-book">
            <h2>meus livros</h2>
            <a href="addBook.html">Adicionar livro</a>
            </div>
            <table class="table table-xl table-light table-hover">
                <thead>
                    <th>Capa</th>
                    <th>Autor</th>
                    <th>Titulo</th>
                    <th>Sub-titulo</th>
                    <th>Edição</th>
                    <th>Editora</th>
                    <th>Ano</th>
                    <th>Ações</th>
                </thead>
                <tbody>
                <?php
                        $livros = require_once '../../backend/select.php';
                        foreach($livros as $livro) {
                            echo <<<TABELA
                                <tr>
                                    <td><img height="70px" src="../../{$livro['capa']}" alt=""></td>
                                    <td>{$livro['autor']}</td>
                                    <td>{$livro['titulo']}</td>
                                    <td>{$livro['subtitulo']}</td>
                                    <td>{$livro['edicao']}</td>
                                    <td>{$livro['editora']}</td>
                                    <td>{$livro['ano']}</td>
                                    <td>
                                        <a href="../../backend/edit.php?id=$livro[id]" class="btn btn-primary">editar</a>
                                        <a href='../../backend/delete.php?id=$livro[id]' class="btn btn-danger">excluir</a>
                                    </td>
                             TABELA;
                        }
                    ?>
           
                </tbody>
            </table>
            </section>
    </section>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>