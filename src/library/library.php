<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="library.css">
    <title>library-painel</title>
</head>
<body>
    <header class="header">
        <a href="#" class="logo">
            <ion-icon name="library-outline"></ion-icon>gerenciador de livros
        </a>

        <nav class="nav">
            <a href="../login/index.html" id="principal">inicio</a>
            <a href="#">cadastro</a>
        </nav>
    </header>
    <section class="home">
        <div class="books">
            <h2>Meus livros</h2>
            <a href="addBook.html">Adicionar livro</a>
            <table class="table">
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
                </tbody>
            </table>
        </div>
    </section>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>