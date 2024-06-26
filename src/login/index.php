<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Pagina-de-login</title>
</head>
<body>
    <header class="header">
        <a href="#" class="logo">
            <ion-icon name="library-outline"></ion-icon>gerenciador de livros
        </a>

        <nav class="nav">
            <a href="" id="principal">inicio</a>
            <a href="../register/cadastro.php">cadastro</a>
        </nav>
    </header>
    <section class="home">
        <div class="content">
            <h2>Faça sua bilioteca</h2>
            <p>
                construa sua propria biblioteca com seus livros favoritos,
                gerencie ela quando quiser e de onde quiser!
            </p>
        </div>

        <div class="box">
            <h2>login</h2>
            <form action="../../backend/login.php" method="post">
                
                <div class="input-box">
                    <span class="logo">
                        <ion-icon name="mail-outline"></ion-icon>
                    </span>
                    <input type="email" name="email" id="email" class="input">
                    <label for="">email</label>
                </div>
               
                <div class="input-box">
                    <span class="logo">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                    </span>
                    <input type="password" name="password" id="password" class="input">
                    <label for="">senha</label>
                    <span class="password-logo">
                        <i class="bi bi-eye" id="btn-eye"></i>
                    </span>
                </div>
    
                <input type="submit" value="Entrar" id="log-btn" class="log-button">
            </form>
        </div>
    </section>


    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="pass-eye-log.js"></script>
</body>
</html>