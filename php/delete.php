<?php

    //se a rota GET(url) não estiver vazia, pegar o id
    if(!empty($_GET['id'])){

        //inclue a conexão
        include_once('configData.php');

        //variáveiid recebe o valor id da rota get
        $id = $_GET['id'];

        //variável recebe comando SQL
        $sqlSlect = "SELECT * FROM alunos WHERE id='$id'";

        //variável recebe query da tabela
        $result = $conexao->query($sqlSlect);

            //se o número de linhas provenientes da variável result for maior que zero
            if($result -> num_rows > 0){

                //variável com comando sql e outra variçavel fazendo a requisição
                $sqlDelete = "DELETE FROM alunos WHERE id = $id";
                $resultDelete = $conexao->query($sqlDelete);
            
            }
        }
        header('Location: ../paginas/sistema.php');
?>