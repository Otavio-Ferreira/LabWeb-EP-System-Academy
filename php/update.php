<?php
       //Incluindo arquivo de conexão ao banco
       include_once('configData.php');

       //se houver um post com id = upadate
       if(isset($_POST['update'])){

        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $idade = $_POST['idade'];
        $endereco = $_POST['endereco'];
        $telefone = $_POST['telefone'];
        $mensalidade = $_POST['mensalidade'];
        $inscricao = $_POST['inscricao'];
        $sexo = $_POST['genero'];

        $sqlInsert = "UPDATE alunos
        SET nome='$nome',email='$email',idade='$idade',endereco='$endereco',telefone='$telefone',mensalidade='$mensalidade',inscricao='$inscricao',sexo='$sexo' WHERE id='$id'";

        $result = $conexao->query($sqlInsert);
    }
    header('Location: ../paginas/sistema.php');
?>