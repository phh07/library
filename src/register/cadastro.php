<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="./cadastro.css">
    <title>Pagina-de-cadastro</title>
</head>
<body>
    <header class="header">
        <a href="#" class="logo">
            <ion-icon name="library-outline"></ion-icon>gerenciador de livros
        </a>

        <nav class="nav">
            <a href="../login/index.php" id="principal">inicio</a>
            <a href="#">cadastro</a>
        </nav>
    </header>
    <section class="home">
        <div class="box">
            <h2>cadastro</h2>
            <form action="../../backend/Cadastro.php" method="post">
                <div class="input-box">
                    <span class="logo">
                        <ion-icon name="person-outline"></ion-icon>
                    </span>
                    <input type="text" name="name" id="name" class="input">
                    <label for="name">nome</label>
                </div>
                
                <div class="input-box">
                    <span class="logo">
                        <ion-icon name="mail-outline"></ion-icon>
                    </span>
                    <input type="email" name="email" id="email" class="input">
                    <label for="email">email</label>
                </div>
               
                <div class="input-box">
                    <span class="logo">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                    </span>
                    <input type="password" name="password" id="password" class="input">
                    <label for="password">senha</label>
                    <span class="password-logo">
                        <i class="bi bi-eye" id="btn-eye"></i>
                    </span>
                </div>

                <div class="input-box">
                    <span class="logo">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                    </span>
                    <input type="password" name="password-confirm" id="password-confirm" class="input">
                    <label for="password">confirme sua senha</label>
                    <span class="password-logo">
                        <i class="bi bi-eye" id="btn-eye-confirm"></i>
                    </span>
                </div>
    
                <input type="submit" value="Cadastrar" id="log-btn" class="log-button">
            </form>
        </div>
    </section>


    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="pass-eye-reg.js"></script>
</body>
</html>