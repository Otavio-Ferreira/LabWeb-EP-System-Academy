<?php
    session_start();
    $senha = $_SESSION['senha'];
    //se a rota GET(url) não estiver vazia, pegar o id
    if(!empty($_GET['id'])){

        //inclue a conexão
        include_once('../php/configData.php');

        //variáveiid recebe o valor id da rota get
        $id = $_GET['id'];

        //variável recebe comando SQL
        $sqlSlect = "SELECT * FROM $senha WHERE id='$id'";

        //variável recebe query da tabela
        $result = $conexao->query($sqlSlect);

        //se o número de linhas provenientes da variável result for maior que zero
        if($result -> num_rows > 0){

          //receber os valores dos campos e colocar em seus devidos lugares no formulário
          while($user_data = mysqli_fetch_assoc($result)){

              $nome = $user_data['nome'];
              $email = $user_data['email'];
              $idade = $user_data['idade'];
              $endereco = $user_data['endereco'];
              $telefone = $user_data['telefone'];
              $mensalidade = $user_data['mensalidade'];
              $inscricao = $user_data['inscricao'];
              $sexo = $user_data['sexo'];
        }
        }
        else{
            header('Location: ../index.php');
        }

    
    }
    else{
        header('Location: ../index.php');
    }
?>