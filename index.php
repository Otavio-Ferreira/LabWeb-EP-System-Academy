<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/styleLogin.css">
    <link
    rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
</head>
<body>
    <div id="container">

        <div id="logo">
            <img src="img/logooficial.png" alt="">
        </div>

        <div id="login"> 
            
            <div id="formlongin">
                <h1>LOGIN</h1>
                <form action="php/testeLogin.php" method="POST">
                    <input type="email" name="email" placeholder="Email">
                    <input type="password" name="senha" placeholder="Senha">
                    <input type="submit" name="submit" value="Entrar" id="submit">
                </form>
            </div>

            <div id="create">
                <p>Não tem um conta? <a href="paginas/cadastraradm.php">Cadastre-se</a></p>
            </div>

        </div>
   </div> 
</body>
</html>