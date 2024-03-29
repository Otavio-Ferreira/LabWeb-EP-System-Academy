<?php
    //essa página faz o teste se o usuário foi registrado ou não

    //usando sessões para melhorar a segurança do login
    session_start();

    //se exitir um post com um submit, e o post email não estiver vazio, e o post senha não 
    //estiver vazio
    
    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])){

        if(isset($_POST['check'])){

            include_once('configData.php');
            $email = $_POST['email'];
            $senha = $_POST['senha'];

            $valor = trim($email);
            $tabelaUser = str_replace(array('.', '@'), "", $valor);

            //variável com o comando sql para buscar na tabela se a mesma existir
            $sql = "SELECT * FROM $tabelaUser WHERE senhaAluno = '$senha'";
           
            //variável que recebe o comando para usar a conexão ao banco atravez do comando sql e ir 
            //até a tabela
            $result = $conexao->query($sql);
            //se o numero de linhas na tabela for menor que 1
            if(mysqli_num_rows($result) < 1){

                //destroi as sessões do email e senha, direciona para a mesma página
                unset($_SESSION['email']);
                unset($_SESSION['senha']);
                echo "<script> alert('Aluno não cadastrado pela academia ou personal!'); window.location = `../paginas/login.php` </script>";
            }
            else {
        
                while($user_data = mysqli_fetch_assoc($result)){
                    $situacao = $user_data['situacao'];
                }

                if($situacao == "Pago"){

                    $_SESSION['email'] = $email;
                    $_SESSION['senha'] = $senha;
                    header('Location: ../paginas/alunoPage.php');

                }
                else{
                    echo "<script> alert('Aluno em situação pendente! Providencie o pagamento para ter acesso novamente!'); window.location = `../paginas/login.php` </script>";
                }
            }
        }
        else{
        //incluir a conexão ao banco, definir variaveis recebendo o post do email e senha
        include_once('configData.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        //variável com o comando sql para buscar na tabela
        $sql = "SELECT * FROM users WHERE email = '$email' and senha = '$senha'";

        //variável que recebe o comando para usar a conexão ao banco atravez do comando sql e ir 
        //até a tabela
        $result = $conexao->query($sql);
            //se o numero de linhas na tabela for menor que 1
            if(mysqli_num_rows($result) < 1){

                echo "<script> alert('Usuário não cadastrado, senha ou email inválido'); window.location = `../paginas/login.php` </script>";
                //destroi as sessões do email e senha, direciona para a mesma página
                unset($_SESSION['email']);
                unset($_SESSION['senha']);
            }
            else {
          
                while($user_data = mysqli_fetch_assoc($result)){
                    $situacao = $user_data['situação'];
                }

                if($situacao == "Ativo"){

                    $_SESSION['email'] = $email;
                    $_SESSION['senha'] = $senha;
                    header('Location: ../index.php');
                    

                }
                else{
                    echo "<script> alert('Usuário não cadastrado, senha ou email inválido'); window.location = `Usuário em situação pendente! Providencie o pagamento!` </script>";
                }
                
            }
        }
    }
    else{
        //se não existir um post, mantem na página
        header('location: ../paginas/login.php');
    }
?>