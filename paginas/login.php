<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="../css/styleLogin.css">
    <link rel="stylesheet" type="text/css" href="../css/styleResponsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    
</head>
<body>
    <main>
        <div id="containerLogin">
            <div id="logo">
                <img src="../img/logooficial.png" class="img" alt="">
            </div>
            <div id="login">
                <div id="formlongin">
                    <h1>FAZER LOGIN</h1>
                    <form action="../php/testeLogin.php" method="POST">
                        <input type="email" name="email" placeholder="Email">
                        <input type="password" name="senha" placeholder="Senha" id="senha">
                        <i class="bi bi-eye-fill" id="eye"></i>
                        <input type="submit" name="submit" value="Entrar" id="submit">
                    </form>
                </div>
                <div id="create">
                    <p>Não tem um plano? <a href="home.php#planos">Assine agora</a></p>
                </div>
            </div>
           </div>
    </main>
    <footer>

    </footer>
    <script src="../javascript/login.js"></script>
</body>
</html>