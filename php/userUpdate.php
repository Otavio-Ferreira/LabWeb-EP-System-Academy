<?php
       //Incluindo arquivo de conexão ao banco
       include_once('configData.php');

       //se houver um post com id = upadate
       if(isset($_POST['update'])){

        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $sqlInsert = "UPDATE users
        SET nome='$nome',email='$email',senha='$senha'
        WHERE id='$id'";

        $result = $conexao->query($sqlInsert);
    }
    header('Location: ../paginas/conta.php');
?>