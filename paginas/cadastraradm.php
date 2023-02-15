<?php
    //essa página cadastra novos usuários

    //se houver um post de um subimit
    if(isset($_POST['submit'])){

        //inclue a conexão
        include_once('../php/configDataAdm.php');

        //cria variáveis que recebem o valores dos inputs que vinheram com o subimit do post
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        //variável que recebe o comando para inserir os dados na tabela
        $result = mysqli_query($conexao, "INSERT INTO users (nome, email, senha) VALUES ('$nome', '$email', '$senha')");

        header('Location: ../index.php');
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro do Personal</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="../css/styleCadAdm.css">
</head>
<body> 
    <div id="container">
        <div class="img">
            <img src="img/logo-p.png" alt="">  
        </div>
        <div class="form">
            <form action="cadastraradm.php" method="POST">
                <input type="text" placeholder="Nome" name="nome" id="nome" required>
               
                <input type="text" placeholder="Email" name="email" id="email" required>
                
                <input type="password" placeholder="Senha" name="senha" id="senha" required>
                
                <input type="submit" id="submit"name="submit" placeholder="Cadastrar">
            </form>
        </div>
        
    </div>
</body>
</html>