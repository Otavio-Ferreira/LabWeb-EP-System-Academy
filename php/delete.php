<?php
<<<<<<< Updated upstream
=======
    session_start();
    $senha = $_SESSION['senha'];
>>>>>>> Stashed changes

    //se a rota GET(url) não estiver vazia, pegar o id
    if(!empty($_GET['id'])){

        //inclue a conexão
        include_once('configData.php');

        //variáveiid recebe o valor id da rota get
        $id = $_GET['id'];

        //variável recebe comando SQL
<<<<<<< Updated upstream
        $sqlSlect = "SELECT * FROM alunos WHERE id='$id'";
=======
        $sqlSlect = "SELECT * FROM $senha WHERE id='$id'";
>>>>>>> Stashed changes

        //variável recebe query da tabela
        $result = $conexao->query($sqlSlect);

            //se o número de linhas provenientes da variável result for maior que zero
            if($result -> num_rows > 0){

                //variável com comando sql e outra variçavel fazendo a requisição
<<<<<<< Updated upstream
                $sqlDelete = "DELETE FROM alunos WHERE id = $id";
=======
                $sqlDelete = "DELETE FROM $senha WHERE id = $id";
>>>>>>> Stashed changes
                $resultDelete = $conexao->query($sqlDelete);
            
            }
        }
<<<<<<< Updated upstream
        header('Location: ../paginas/sistema.php');
=======
        header('Location: ../index.php');
>>>>>>> Stashed changes
?>